<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
    * @Route("/", name="homepage")
    */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/foo/bar/hello/long/url/{nom}", name="hello")
    */
    public function hello($nom)
    {
        // Logique métier
        $h = date("H:i:s");
        $hh = date("H");
  
        $temps = $hh<18 ? "jour" : "nuit";

        // Tout balancer à la vue
        return $this->render('default/hello.html.twig', ['heure' => $h, 'temps' => $temps, 'nom' => $nom]);
    }

    /**
    * @Route("/random/{a}/{b}", name="random")
    */
    public function random($a, $b)
    {
        $n = rand($a, $b);

        // Tout balancer à la vue
        return $this->render('default/random.html.twig', 
            ['n' => $n, 'a' => $a, 'b' => $b]);
    }

    /**
    * @Route("/menu/", name="menu")
    */
    public function menu()
    {
        return $this->render('default/menu.html.twig');
    }

}
