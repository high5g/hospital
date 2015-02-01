<?php

namespace High5\Hospital\AdminHospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('High5HospitalAdminHospitalBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function loginAction(Request $request){
        $personne = new Personne();
        $form = $this->createFormBuilder($personne)
            ->add('login', 'text', array('label' => 'Login'))
            ->add('mdp', 'password', array('label' => 'Mot de passe'))
            ->add('fkHopital', 'entity', array(
                'class' => 'High5HospitalDataAccessLayerBundle:Hopital',
                'property' => 'nom',
                'label' => 'Hopital'))
            ->add('btn_login', 'submit', array('label' => 'Login'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid())
        {
            $login = $form["login"]->getData();
            $password = $form["mdp"]->getData();
            $hopital = $form["fkHopital"]->getData();
            $queryData = array('login' => $login, 'mdp' => $password, 'fkHopital' => $hopital->getId());
            $result = $this->getDoctrine()->getRepository('High5\Hospital\DataAccessLayerBundle\Entity\Personne')->findBy($queryData);
            if ($result == null)
            {
                $message = "Login failed. No match has been found for the specified username.";
                return $this->render('High5HospitalAdminBundle:Default:error.html.twig', array('message' => $message));
            }
            return $this->render('High5HospitalAdminBundle:Login:success.html.twig', array('username' => $login));
        }
        return $this->render('High5HospitalAdminHospitalBundle:Default:authentification.html.twig',
                array('login_form' => $form->createView()));
    
    }
}
