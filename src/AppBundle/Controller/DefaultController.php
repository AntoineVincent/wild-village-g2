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

        $search = $request->request->get('recherche');

        if ($search == null) {
                $searchresult = $em->getRepository('AppBundle:User')->findAll();
            }
        else {
            $searchresult = $em->getRepository('AppBundle:User')->findByUsername($search);
            }

        return $this->render('default/search.html.twig', array(
            'search_result' => $searchresult,
        ));
    }

}
