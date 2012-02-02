<?php

namespace Poivre\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PrincipalController extends Controller
{
    public function indexAction()
    {       
        return $this->render('PoivrePrincipalBundle:Principal:index.html.twig');
    }
}


?>