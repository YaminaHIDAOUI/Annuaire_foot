<?php

namespace Annuaire\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnuaireUserBundle::index.html.twig');
    }

    /*public function loginAction(){
    	return $this->render('AnnuaireUserBundle:Default:login.html.twig');
    }*/

    public function helloAction(){
    	return $this->render('AnnuaireUserBundle::hello.html.twig');
    }
}
