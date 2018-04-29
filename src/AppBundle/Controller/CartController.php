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
      * @Route("/cart/add/{product_id}", name="eshop_add_to_cart")
      */
     function addToCart($product_id) {     	
     	$session = new Session();
     	@$cart = $session->get('sess_cart');
     	@$cart[$product_id] ++ ;
     	$session->set('sess_cart', $cart);
     	
     	// Retrouner à la page précédente
     	$em   = $this->getDoctrine()->getManager();
     	$repo = $em->getRepository(Product::class);
     	$prd  = $repo->find($product_id);
     	$cat  = $prd->getCategory();
     	return $this->redirectToRoute('eshop_category', ['id'=> $cat->getId()]);
     }

     function cartCount() {
     	
     }
}
