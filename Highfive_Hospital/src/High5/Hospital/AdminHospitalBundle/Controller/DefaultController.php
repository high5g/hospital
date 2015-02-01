<?php

namespace High5\Hospital\AdminHospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $session = new Session();
        $personne = $session->get('active_user');
        return $this->render('High5HospitalAdminHospitalBundle:Default:index.html.twig', array('username' => $personne->getUsername()));
    }
    
    public function loginAction(Request $request)
    {
        $personne = new Personne();
        $form = $this->createFormBuilder($personne)
            ->add('username', 'text', array('label' => 'Username'))
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
            $username = $form["username"]->getData();
            $password = $form["mdp"]->getData();
            
            $hopital = $form["fkHopital"]->getData();
            $queryData = array('username' => $username, 'mdp' => $password, 'fkHopital' => $hopital->getId());
            $dataAccessObject = $this->getDoctrine()->getRepository('High5\Hospital\DataAccessLayerBundle\Entity\Personne');
            $result = $dataAccessObject->findBy($queryData);

            if ($result == null)
            {
                $message = "Login failed. No match has been found for the specified username.";
                return $this->render('High5HospitalAdminBundle:Default:error.html.twig', array('message' => $message));
            }

            $session = new Session();
            $session->set('active_user', $personne);

            return $this->redirect($this->generateUrl('high5_hospital_admin_hospital_homepage'));
        }
        return $this->render('High5HospitalAdminHospitalBundle:Default:authentification.html.twig',
                array('login_form' => $form->createView()));
    
    }
}
