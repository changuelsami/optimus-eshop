<?php
// src/AppBundle/Controller/FrontController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use AppBundle\Entity\Commande;
use AppBundle\Entity\ProductCommande;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("eshop")
 */
class OrderController extends Controller
{
    /**
     * @Route("/order/", name="eshop_order")
     */
    public function order(Request $request)
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
        
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $commande->setDate(new \DateTime()); // don't forget the "\"
            $em = $this->getDoctrine()->getManager();
            // Sauvegarder la commande (données client)
            $em->persist($commande);

            // Boucle pour Sauvegarder TOUS les produits du panier
            $session = new Session();
            $cart = $session->get('sess_cart');
            $repo = $em->getRepository(Product::class);
            foreach ($cart as $prd_id => $qty) {
                $pc = new ProductCommande();
                $pc->setQty($qty);
                $prd = $repo->find($prd_id);
                $pc->setPrice($prd->getPrice());
                $pc->setProduct($prd);
                $pc->setCommande($commande);

                $em->persist($pc);
            }
            $em->flush();
            $num_cmd = $commande->getId();
            return $this->redirectToRoute('eshop_merci', ['order_id' => $num_cmd]);
        }

        return $this->render("eshop/front/order.html.twig", ['form' => $form->createView()]);
    }

    /**
     * @Route("/merci/{order_id}", name="eshop_merci")
     */
    public function merci($order_id) {
        return $this->render('eshop/front/merci.html.twig', ['num_cmd' => $order_id]);
    }



    /**
     * Lists all commande entities.
     *
     * @Route("/admin/order/", name="eshop_admin_order_index")
     */
    public function ordersAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('AppBundle:Commande')->findAll();

        return $this->render('eshop/admin/commande/index.html.twig', array(
            'commandes' => $commandes,
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     * @Route("/admin/order/{id}", name="eshop_admin_order_show")
     */
    public function detailsAction(Commande $commande)
    {
        return $this->render('eshop/admin/commande/show.html.twig', array(
            'commande' => $commande,
        ));
    }    

}