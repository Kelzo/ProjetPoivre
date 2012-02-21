<?php

namespace Poivre\NoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('PoivreNoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
