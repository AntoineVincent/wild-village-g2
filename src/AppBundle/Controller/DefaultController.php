<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $tabsearch = [];
        $search = $request->request->get('recherche');

        if ($search == null) {
            $searchresult = $em->getRepository('AppBundle:User')->findAll();
        }
        else {
            $searchresult = $em->getRepository('AppBundle:User')->findByUsername($search);
        }

        foreach ($searchresult as $datasearch)
        {
            $thisGender = $em->getRepository('AppBundle:datauser')->findOneByIduser($datasearch->getId());
            $tabsearch[] = array(
                'gender' => $thisGender->getGenre(),
                'username' => $datasearch->getUsername(),
                'lastlogin' => $datasearch->getLastlogin(),
                'id' => $datasearch->getId(),
            );
        }

        return $this->render('default/search.html.twig', array(
            'tabsearchs' => $tabsearch,
        ));
    }

}
