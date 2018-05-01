<?php
// src/AppBundle/Controller/FrontController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Entity\Product;

/**
 * @Route("eshop")
 */
class OrderController extends Controller
{
    /**
     * @Route("/order/", name="eshop_eshop")
     */
    public function order()
    {
    	
    }

}