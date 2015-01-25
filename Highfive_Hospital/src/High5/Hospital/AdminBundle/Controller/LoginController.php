<?php

namespace High5\Hospital\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\AdminBundle\Form\LoginForm;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        $builder = $this->createFormBuilder();
        $loginForm = new LoginForm();
        $loginForm->buildForm($builder, array());
        $form = $builder->getForm();
        $form->handleRequest($request);
        
        if ($form->isValid())
        {
            $username = $form["username"]->getData();
            $password = $form["password"]->getData();
            $queryData = array('login' => $username, 'mdp' => $password);
            $result = $this->getDoctrine()->getRepository('High5\Hospital\AdminBundle\Entity\Personne')->findBy($queryData);
            if ($result == null)
            {
                $message = "Login failed. No match has been found for the specified username.";
                return $this->render('High5HospitalAdminBundle:Default:error.html.twig', array('message' => $message));
            }
            return $this->render('High5HospitalAdminBundle:Login:success.html.twig', array('username' => $username));
        }

        return $this->render('High5HospitalAdminBundle:Login:login.html.twig',
                array('login_form' => $form->createView()));
    }
}
