<?php

namespace BionicUniversity\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Component\Security\Core\SecurityContextInterface;
use BionicUniversity\UserBundle\Entity\User;


class SecurityController extends Controller{

    public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'BionicUniversityUserBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
                'error'         => $error
            )
        );
    }

    public function registrationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $error_message="";
        $roles = array('ROLE_USER');
        $user = new User($roles);
        $form = $this->createFormBuilder($user)
            ->add('password', 'password')
            ->add('email', 'email')
            ->add('register', 'submit')
            ->getForm();
        $form->handleRequest($request);

        if($form->isValid()){
            $user->setEmail($form['email']->getData());
            $user->setSalt(md5(time()));
            $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
            $password = $encoder->encodePassword($form['password']->getData(), $user->getSalt());
            $user->setPassword($password);

            $em->persist($user);
            $em->flush();

            return $this->redirect($this->generateUrl('login_path'));
        }
        return $this->render(
            'BionicUniversityUserBundle:Security:registration.html.twig',array('form'=>$form->createView(),
                'error_message'=>$error_message)

        );
    }
}