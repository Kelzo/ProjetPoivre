<?php

namespace Poivre\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {       
        return $this->render('PoivreUserBundle:User:index.html.twig',array('var' => 'test'));
    }
}


?>