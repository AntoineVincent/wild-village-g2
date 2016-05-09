<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EspaceController extends Controller
{
    /**
     * @Route("/", name="user_espace")
     */
    public function espaceAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/espace.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}