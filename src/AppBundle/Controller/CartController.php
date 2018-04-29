<?php
// src/AppBundle/Controller/CartController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;
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
     	
     }
}
