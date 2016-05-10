<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EspacemodifController extends Controller
{
    /**
     * @Route("/", name="user_espacemodif")
     */
    public function espacemodifAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $nom = $request->request->get('nom');

        $requestinfos = $em->getRepository('AppBundle:datauser')->findOneByIduser($user->getId());

        $requestinfos->setnom($nom);
        
        $em->persist($requestinfos);
        $em->flush();

        return $this->render('default/espacemodif.html.twig', array('requete_infos' => $requestinfos,
        ));      
    }
}
