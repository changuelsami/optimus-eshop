<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use AppBundle\Entity\Category;

/**
 * @Route("/eshop/admin/category")
 */
class CategoryController extends Controller
{
    /**
    * @Route("/", name="admin_category_index")
    */
    public function list()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Category::class);
        $items = $repo->findAll();

        return $this->render('eshop/admin/category/index.html.twig', 
            ['items' => $items]);
    }

    /**
    * @Route("/new/", name="admin_category_new")
    */
    public function addnew(Request $req)
    {
        $cat = new Category();
        // Create a form
        $form = $this->createFormBuilder($cat)
            ->add('label')
            ->add('details', CKEditorType::class,
                [
                    'required' => false, 
                    'config'   => ['toolbar' => 'basic']
                ] )
            ->add('save', SubmitType::class)
            ->getForm();

        // Handle the submit
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            // Persist the data (the object)
            $em = $this->getDoctrine()->getManager();
            $em->persist($cat);
            $em->flush();
            return $this->redirectToRoute('admin_category_index');
        }

        return $this->render('eshop/admin/category/new.html.twig',
                ['theform' => $form->createView()]
            );
    }

    /**
    * @Route("/remove/{id}", name="admin_category_remove")
    */
    public function remove($id) {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository(Category::class)->find($id);
        $em->remove($item);
        $em->flush();
        return $this->redirectToRoute('admin_category_index');
    }


    /**
    * @Route("/update/{id}", name="admin_category_update")
    */
    public function update(Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository(Category::class)->find($id);
        
        // Create a form
        $form = $this->createFormBuilder($cat)
            ->add('label')
            ->add('details', CKEditorType::class,
                [
                    'required' => false, 
                    'config'   => ['toolbar' => 'basic']
                ] )
            ->add('save', SubmitType::class)
            ->getForm();

        // Handle the submit
        $form->handleRequest($req);
        if($form->isSubmitted())
        {
            // Persist the data (the object)
            $em = $this->getDoctrine()->getManager();
            $em->persist($cat);
            $em->flush();
            return $this->redirectToRoute('admin_category_index');
        }

        return $this->render('eshop/admin/category/update.html.twig',
                ['theform' => $form->createView()]
            );
    }    
}
