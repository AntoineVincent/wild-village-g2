<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\datauser;

class EspacemodifController extends Controller
{
    /**
     * @Route("/", name="user_espacemodif")
     */
    public function espacemodifAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $pseudo = $request->request->get('pseudo');
        $nom = $request->request->get('nom');

        $requestinfos = $em->getRepository('AppBundle:datauser')->findOneByIduser($iduser);
        
        $requestinfos->setNom($pseudo);
        $requestinfos->setNom($nom);
        

        $em->persist($requestinfos);
        $em->flush();

        return $this->render('default/espacemodif.html.twig', array(
            'requete_infos' => $requestinfos,
        ));      
    }
}
