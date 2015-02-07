<?php

namespace High5\Hospital\AdminHospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\AdminHospitalBundle\Form\PatientForm;
use High5\Hospital\AdminHospitalBundle\Form\DoctorForm;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;
use High5\Hospital\DataAccessLayerBundle\Entity\Patient;
use High5\Hospital\DataAccessLayerBundle\Entity\Medecin;

class DefaultController extends Controller
{

    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    private function getActiveUser()
    {
        return $this->session->get('active_user');
    }

    public function indexAction()
    {
        $personne = $this->getActiveUser();
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
            $queryData = array('username' => $username, 'mdp' => $password, 'fkHopital' => $hopital->getId(),
                'classe' => 0);

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

    public function addPatientAction(Request $request)
    {
        $builder = $this->createFormBuilder();
        $personFormBuilder = new PatientForm();
        $personFormBuilder->buildForm($builder, array());
        $form = $builder->getForm();

        $form->handleRequest($request);
        if ($form->isValid())
        {
            $patient = $personFormBuilder->parseFormData($form->getData());

            $doctrineManager = $this->getDoctrine()->getManager();
            $hospitalId = $this->getActiveUser()->getFkHopital()->getId();
            $hospital = $doctrineManager->getRepository('High5HospitalDataAccessLayerBundle:Hopital')->find($hospitalId);
            $patient->getFkPersonne()->setFkHopital($hospital);
            $doctrineManager->persist($patient);
            $doctrineManager->flush();

            return $this->redirect($this->generateUrl('high5_hospital_admin_hospital_homepage'));
        }
        return $this->render('High5HospitalAdminHospitalBundle:Default:patient.factory.html.twig',
                array('form' => $form->createView()));
    }

    public function addDoctorAction(Request $request)
    {
        $builder = $this->createFormBuilder();
        $personFormBuilder = new DoctorForm();
        $personFormBuilder->buildForm($builder, array());
        $form = $builder->getForm();

        $form->handleRequest($request);
        if ($form->isValid())
        {
            $medecin = $personFormBuilder->parseFormData($form->getData());

            $doctrineManager = $this->getDoctrine()->getManager();
            $hospitalId = $this->getActiveUser()->getFkHopital()->getId();
            $hospital = $doctrineManager->getRepository('High5HospitalDataAccessLayerBundle:Hopital')->find($hospitalId);
            $medecin->getFkPersonne()->setFkHopital($hospital);
            $doctrineManager->persist($medecin);
            $doctrineManager->flush();

            return $this->redirect($this->generateUrl('high5_hospital_admin_hospital_homepage'));
        }
        return $this->render('High5HospitalAdminHospitalBundle:Default:doctor.factory.html.twig',
                array('form' => $form->createView()));
    }

    public function logOutAction()
    {
        $this->session->remove('active_user');
        return $this->redirect($this->generateUrl('high5_hospital_adminhospital_login'));
    }
}
