<?php

namespace BionicUniversity\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BionicUniversityNewsBundle:Default:index.html.twig', array('name' => $name));
    }
}
