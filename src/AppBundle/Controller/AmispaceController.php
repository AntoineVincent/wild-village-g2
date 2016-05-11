<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AmispaceController extends Controller
{
    /**
     * @Route("/", name="user_ami")
     */
    public function amispaceAction(Request $request, $idami)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $ami = $em->getRepository('AppBundle:User')->findOneById($idami);
        $amidata = $em->getRepository('AppBundle:datauser')->findOneByIduser($idami);

        return $this->render('default/ami.html.twig', array(
            'ami' => $ami,
            'amidata' => $amidata,
        ));
    }
}

