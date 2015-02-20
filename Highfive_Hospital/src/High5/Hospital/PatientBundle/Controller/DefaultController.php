<?php

namespace High5\Hospital\PatientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;

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
        $user = $this->getActiveUser();
        if ($user == null)
        {
            return $this->redirect($this->generateUrl('high5_hospital_patient_login'));
        }
        return $this->render('High5HospitalPatientBundle:Default:homepage.html.twig',
                array('username' => $user->getNom() . ' ' . $user->getPrenom()));
    }

    private function findUser($username, $password, $hospitalId, $userClass)
    {
        $queryData = array('username' => $username, 'mdp' => $password, 'fkHopital' => $hospitalId,
            'classe' => $userClass);

        $dataAccessObject = $this->getDoctrine()->getRepository('High5HospitalDataAccessLayerBundle:Personne');
        return $dataAccessObject->findBy($queryData);
    }

    public function loginAction(Request $request)
    {
        $personne = new Personne();
        $form = $this->createFormBuilder($personne)
            ->add('username', 'text', array('label' => 'Username'))
            ->add('mdp', 'password', array('label' => 'Password'))
            ->add('fkHopital', 'entity', array(
                'class' => 'High5HospitalDataAccessLayerBundle:Hopital',
                'property' => 'nom',
                'label' => false))
            ->add('btn_login', 'submit', array('label' => 'Login', 'attr' => array('class' => 'login login-submit')))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid())
        {
            $result = $this->findUser($form["username"]->getData(), $form["mdp"]->getData(),
                    $form["fkHopital"]->getData()->getId(), 2);
            if ($result == null)
            {
                $message = "Login failed. No match has been found for the specified username.";
                return $this->render('High5HospitalAdminBundle:Default:error.html.twig', array('message' => $message));
            }

            $session = new Session();
            $session->set('active_user', $result[0]);

            return $this->redirect($this->generateUrl('high5_hospital_patient_homepage'));
        }
        return $this->render('High5HospitalPatientBundle:Default:login.html.twig',
                array('login_form' => $form->createView()));
    }

    public function listAvailableDoctorsAction()
    {
        $hospital = $this->getActiveUser()->getFkHopital();
        $query = $this->getDoctrine()->getEntityManager()->createQuery('select m'
                . ' from High5HospitalDataAccessLayerBundle:Medecin m'
                . ' join m.fkPersonne p'
                . ' where p.fkHopital = :hospitalId');
        $query->setParameter('hospitalId', $hospital->getId());
        $doctors = $query->getResult();
        return $this->render('High5HospitalPatientBundle:Default:doctors.list.html.twig',
                array('doctors' => $doctors, 'hospitalName' => $hospital->getNom()));
    }

    public function viewMedicalFileAction()
    {
        $dataAccessObject = $this->getDoctrine()->getRepository('High5HospitalDataAccessLayerBundle:Patient');
        $activeUser = $this->getActiveUser();
        $patients = $dataAccessObject->findBy(['fkPersonne' => $activeUser->getId()]);
        return $this->render('High5HospitalPatientBundle:Default:medical.file.html.twig',
                array('patient' => $patients[0]));
    }

    public function createRendezvousAction()
    {
        return $this->render('High5HospitalPatientBundle:Default:create.rdv.html.twig');
    }

    public function logOutAction()
    {
        $this->session->remove('active_user');
        return $this->redirect($this->generateUrl('high5_hospital_patient_login'));
    }

}
