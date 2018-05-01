<?php
// src/AppBundle/Controller/FrontController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use AppBundle\Entity\Commande;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * @Route("eshop")
 */
class OrderController extends Controller
{
    /**
     * @Route("/order/", name="eshop_order")
     */
    public function order()
    {
    	// Build oder form    
        $commande = new Commande();  
        $form = $this->createFormBuilder($commande)
                    ->add('name'    , TextType::class , ['attr' => ['placeholder'=>'Votre nom & prénom']])
                    ->add('email'   , EmailType::class, ['attr' => ['placeholder'=>'Votre email']])
                    ->add('address' , TextType::class , ['attr' => ['placeholder'=>'Votre adresse']])
                    ->add('paiement', ChoiceType::class, 
                        [ 'choices' => 
                            [
                                'Virement bancaire'  => "VRMT",
                                'Paiment par chèque' => "CHQ",
                                'Paypal'             => "PAYPAL"
                            ],
                            'expanded' => true,
                            'label_attr' => ['class' => 'radio-inline'],
                        ])
                    ->getForm();
        
        return $this->render("eshop/front/order.html.twig", ['form' => $form->createView()]);
    }

}