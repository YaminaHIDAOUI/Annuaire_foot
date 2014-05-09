<?php

namespace Annuaire\FootBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnuaireFootBundle:Default:index.html.twig');
    }
}
