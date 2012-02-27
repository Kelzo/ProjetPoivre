<?php

namespace Poivre\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PrincipalController extends Controller
{
    public function indexAdminAction()
    {       
        return $this->render('PoivrePrincipalBundle:Admin:index.html.twig');
    }

	    public function indexEtudiantAction()
    {       
        return $this->render('PoivrePrincipalBundle:Etudiant:index.html.twig');
    }
	
	    public function indexProfesseurAction()
    {       
        return $this->render('PoivrePrincipalBundle:Professeur:index.html.twig');
    }
	
}


?>