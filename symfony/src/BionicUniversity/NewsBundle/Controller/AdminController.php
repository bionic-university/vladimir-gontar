<?php

namespace BionicUniversity\NewsBundle\Controller;
use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BionicUniversity\NewsBundle\Entity\Test;
use BionicUniversity\NewsBundle\Form\TestType;
use BionicUniversity\NewsBundle\Form\TestShowType;
class AdminController extends Controller{
    public function adminMainPageAction(){
        //getting logged user id
        $user = $this->get('security.context')->getToken()->getUser();


        $em = $this->getDoctrine()->getManager();


        return $this->render('BionicUniversityNewsBundle:Admin:index.html.twig', array(
            #'entities' => $entities,
        ));
    }

    public function resultsAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityNewsBundle:Result')->findBy(array('testId'=>$id));

//
//        $form = $this->createForm(new TestShowType(), $entity);
//        $form->handleRequest($request);
//        if ($form->isValid()) {
//
//        }
        return $this->render('BionicUniversityNewsBundle:Admin:results.html.twig', array(
          'entities'=>$entity
        ));
    }

} 