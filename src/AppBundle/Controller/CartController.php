<?php
// src/AppBundle/Controller/CartController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\Product;
/**
 * @Route("/eshop")
 */
class CartController extends Controller
{
     /**
      * @Route("/cart/add/{id}", name="eshop_add_to_cart")
      */
     function addToCart(Product $prd) {     	
     	$session = new Session();
     	@$cart = $session->get('sess_cart');
     	@$cart[$prd->getId()] ++ ;
     	$session->set('sess_cart', $cart);
     	
     	// Retrouner à la page précédente
     	$cat  = $prd->getCategory();
     	return $this->redirectToRoute('eshop_category', ['id'=> $cat->getId()]);
     }

     // Renvoi le nbr total des produits du panier
     function cartCount() {
     	$session = new Session();
     	$cart = $session->get('sess_cart');
     	$total = 0;
     	if ($cart)
	     	foreach ($cart as $id => $qty) 
	     		$total += $qty;
	     	
     	return new Response($total);
     }

     /**
      * @Route("/cart/", name="eshop_cart")
      */
     function cart() {
     	$session = new Session();
     	$cart = $session->get('sess_cart');
     	$products = array();

     	$em = $this->getDoctrine()->getManager();
     	$repo = $em->getRepository(Product::class);

     	$total_ht = 0;

     	foreach ($cart as $product_id => $qty) {
     		$prd = $repo->find($product_id);
     		$products[] = $prd;
     		$total_ht += $prd->getPrice() * $qty;
     	}

     	$mnt_tva = $total_ht * 10/100;
     	$total_ttc = $total_ht + $mnt_tva;

     	return $this->render("eshop/front/cart.html.twig",
     		[
     			'products' => $products,
     			'cart'	   => $cart,
     			'total_ht' => $total_ht,
     			'mnt_tva'  => $mnt_tva,
     			'total_ttc'=> $total_ttc
     		]
     	);
     }
}
