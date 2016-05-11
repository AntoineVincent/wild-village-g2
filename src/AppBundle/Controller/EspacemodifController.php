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
        $genre = $request->request->get('genre');
        $biographie = $request->request->get('biographie');
        $sitePersos = $request->request->get('site');
        $github = $request->request->get('github');
        $linkedin = $request->request->get('linkedin');
        $tweeter = $request->request->get('tweeter');
        $doyoubuzz = $request->request->get('doyoubuzz');
        $age = $request->request->get('age');

        $hidden = $request->request->get('hidden');

        $requestinfos = $em->getRepository('AppBundle:datauser')->findOneByIduser($user->getId());

        if ($hidden == 1){
            if (!empty($nom)) {
                $requestinfos->setNom($nom);
            }
            if (!empty($prenom)) {
                $requestinfos->setPrenom($prenom);
            }
            if (!empty($biographie)) {
                $requestinfos->setBiographie($biographie);
            }
            if (!empty($sitePersos)) {
                $requestinfos->setSite($sitePersos);
            }
            if (!empty($github)) {
                $requestinfos->setGithub($github);
            }
            if (!empty($linkedin)) {
                $requestinfos->setLinkedin($linkedin);
            }
            if (!empty($tweeter)) {
                $requestinfos->setTweeter($tweeter);
            }
            if (!empty($doyoubuzz)) {
                $requestinfos->setDoyoubuzz($doyoubuzz);
            }
            if (!empty($age)) {
                $requestinfos->setAge($age);
            }
            $requestinfos->setGenre($genre);
            $em->persist($requestinfos);
            $em->flush();
        }
        return $this->render('default/espacemodif.html.twig', array(
            'requete_infos' => $requestinfos,
        ));   
    }
}
