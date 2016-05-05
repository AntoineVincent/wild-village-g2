<?php

namespace wildVillageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('wildVillageBundle:Default:index.html.twig');
    }
}
