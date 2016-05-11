<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\post;
use AppBundle\Form\postType;

class PostController extends Controller
{
      public function postAction()
      {
            
            $Post=new post();
            $form=$this->createForm(new postType(), $Post);

            return $this->render('default/post.html.twig', array (
                'form' => $form->createView(),
                )
            );
    
    }
        
}
