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
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $request = $em->getRepository('AppBundle:datauser')->findOneByIduser($user->getId());
        return $this->render('default/espace.html.twig', array(
            'requete' => $request,
        ));      
    }
}

