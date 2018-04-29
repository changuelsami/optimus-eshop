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

     function cartCount() {
     	$session = new Session();
     	$cart = $session->get('sess_cart');
     	$total = 0;
     	if ($cart)
	     	foreach ($cart as $id => $qty) 
	     		$total += $qty;
	     	
     	return new Response($total);
     }
}
