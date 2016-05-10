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
        $prenom = $request->request->get('prenom');
        $biographie = $request->request->get('biographie');
        $site = $request->request->get('site');
        $github = $request->request->get('github');
        $linkedin = $request->request->get('linkedin');
        $tweeter = $request->request->get('tweeter');
        $doyoubuzz = $request->request->get('doyoubuzz');


        $requestinfos = $em->getRepository('AppBundle:datauser')->findOneByIduser($user->getId());
        $requestinfos->setNom($nom);
        $requestinfos->setPrenom($prenom);
        $requestinfos->setBiographie($biographie);
        $requestinfos->setSite($site);
        $requestinfos->setGithub($github);
        $requestinfos->setLinkedin($linkedin);
        $requestinfos->setTweeter($tweeter);
        $requestinfos->setDoyoubuzz($doyoubuzz);

        $em->persist($requestinfos);
        $em->flush();

        return $this->render('default/espacemodif.html.twig', array(
            'requete_infos' => $requestinfos,
        ));      
    }
}
