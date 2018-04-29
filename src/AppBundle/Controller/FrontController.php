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
class FrontController extends Controller
{
    /**
     * @Route("/", name="eshop_index")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$repo = $em->getRepository(Category::class);
    	$list = $repo->findAll();
    	return $this->render("eshop/front/index.html.twig",
    		['categories' => $list]);
    }

    /**
     * @Route("/category/{id}", name="eshop_category")
     */
    public function categoryAction(Category $category)
    {
    	// Get product of given category
    	$em = $this->getDoctrine()->getManager();
    	$repo = $em->getRepository(Product::class);
    	$products = $repo->findByCategory($category->getId());

    	return $this->render("eshop/front/products.html.twig",
    		['products' => $products, 'category' => $category]);
    }

}