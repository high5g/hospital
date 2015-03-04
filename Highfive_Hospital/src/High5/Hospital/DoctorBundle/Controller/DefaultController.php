<?php

namespace High5\Hospital\DoctorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;
use High5\Hospital\DataAccessLayerBundle\Utils\UserUtils;
use Symfony\Component\HttpFoundation\JsonResponse;

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
            return $this->redirect($this->generateUrl('high5_hospital_doctor_login'));
        }
        return $this->render('High5HospitalDoctorBundle:Default:homepage.html.twig',
                array('username' => $user->getNom() . ' ' . $user->getPrenom()));
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
            $result = UserUtils::findUser($doctrine = $this->getDoctrine(),
                    $form["username"]->getData(), $form["mdp"]->getData(),
                    $form["fkHopital"]->getData()->getId(), 1);
            if ($result == null)
            {
                $message = "Login failed. No match has been found for the specified username.";
                return $this->render('High5HospitalAdminBundle:Default:error.html.twig', array('message' => $message));
            }

            $session = new Session();
            $session->set('active_user', $result[0]);

            return $this->redirect($this->generateUrl('high5_hospital_doctor_homepage'));
        }
        return $this->render('High5HospitalDoctorBundle:Default:login.html.twig',
                array('login_form' => $form->createView()));
    }

    public function planRendezvousAction()
    {
        return $this->render("High5HospitalDoctorBundle:Default:plan.rdv.html.twig");
    }

    public function findPatientFileAction(Request $request)
    {
        $patientName = $request->get('name');
        $dao = $this->getDoctrine()->getEntityManager()
                ->getRepository('High5HospitalDataAccessLayerBundle:Personne');
        $query = $dao->createQueryBuilder('p')
                ->where('p.fkHopital = :hospitalId')
                ->andWhere('p.classe = 2')
                ->andWhere('(p.nom LIKE :word or p.prenom LIKE :word)')
                ->setParameter('word', '%' . $patientName . '%')
                ->setParameter('hospitalId', $this->getActiveUser()->getFkHopital()->getId())
                ->getQuery();
        $result = $query->getArrayResult();
        if ($result != null)
        {
            $view = $this->renderView("High5HospitalDoctorBundle:Default:patients.list.html.twig",
                    array('hospitalName' => $this->getActiveUser()->getFkHopital()->getNom(),
                        'patients' => $result));
            $response = ["code" => 100, "success" => true, "result" => $view];
            return new JsonResponse($response);
        }
        else
        {
            $response = ["code" => 100, "success" => false, "result" => "No match has been found"];
            return new JsonResponse($response);
        }
    }

    public function editPatientFileAction()
    {
        return $this->render("High5HospitalDoctorBundle:Default:edit.patient.file.html.twig");
    }

}
