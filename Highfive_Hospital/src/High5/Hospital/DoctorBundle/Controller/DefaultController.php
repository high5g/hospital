<?php

namespace High5\Hospital\DoctorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;
use High5\Hospital\DataAccessLayerBundle\Entity\Patient;
use High5\Hospital\DataAccessLayerBundle\Entity\Rendezvous;
use High5\Hospital\DataAccessLayerBundle\Utils\UserUtils;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    private function getActiveDoctor()
    {
        return $this->session->get('active_user');
    }

    public function indexAction()
    {
        $user = $this->getActiveDoctor();
        if ($user == null)
        {
            return $this->redirect($this->generateUrl('high5_hospital_doctor_login'));
        }
        return $this->render('High5HospitalDoctorBundle:Default:homepage.html.twig',
                array('username' => $user->getFkPersonne()->getNom() . ' ' . $user->getFkPersonne()->getPrenom()));
    }

    public function loginAction(Request $request)
    {
        $personne = new Personne();
        $form = $this->createFormBuilder($personne)
            ->add('username', 'text', array('label' => 'Username', 'attr' => array('class' => 'form-control')))
            ->add('mdp', 'password', array('label' => 'Password', 'attr' => array('class' => 'form-control')))
            ->add('fkHopital', 'entity', array(
                'class' => 'High5HospitalDataAccessLayerBundle:Hopital',
                'property' => 'nom',
                'label' => false,
                'attr' => array('class' => 'form-control')))
            ->add('btn_login', 'submit', array('label' => 'Login', 'attr' => array('class' => 'btn btn-default')))
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
            $session->set('active_user', UserUtils::findDoctor($doctrine, $result[0]));

            return $this->redirect($this->generateUrl('high5_hospital_doctor_homepage'));
        }
        return $this->render('High5HospitalDoctorBundle:Default:login.html.twig',
                array('login_form' => $form->createView()));
    }

    public function logOutAction()
    {
        $this->session->remove('active_user');
        return $this->redirect($this->generateUrl('high5_hospital_doctor_login'));
    }

    public function planRendezvousAction(Request $request)
    {
        $rdv = new Rendezvous();
        $form = $this->createFormBuilder($rdv)
            ->add('dateVisite', 'date', array('label' => 'Visit date'))
            ->add('fkPatient', 'entity', array(
                'class' => 'High5HospitalDataAccessLayerBundle:Patient',
                'property' => 'fkPersonne.prenom',
                'label' => 'Choose patient'))
            ->add('btn_login', 'submit', array('label' => 'Create Rendezvous', 'attr' => array('class' => 'btn btn-default')))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $doctor = UserUtils::findDoctor($this->getDoctrine(), $this->getActiveDoctor()->getFkPersonne());
            $rdv->setFkMedecin($doctor);
            $this->getDoctrine()->getEntityManager()->persist($rdv);
            $this->getDoctrine()->getEntityManager()->flush();
            return $this->redirect($this->generateUrl('high5_hospital_doctor_homepage'));
        }
        return $this->render("High5HospitalDoctorBundle:Default:plan.rdv.html.twig",
                array('rdv_form' => $form->createView()));
    }

    public function viewRendezvousPlanningAction()
    {
        $doctorId = $this->getActiveDoctor()->getId();
        $dao = $this->getDoctrine()->getRepository('High5HospitalDataAccessLayerBundle:Rendezvous');
        $rdvList = $dao->findBy(array('fkMedecin' => $doctorId));
        return $this->render("High5HospitalDoctorBundle:Default:rendezvous.planning.html.twig",
                array('doctorName' => $this->getActiveDoctor()->getFkPersonne()->getPrenom(), 'rdvs' => $rdvList));
    }

    public function findPatientFileAction(Request $request)
    {
        $patientName = $request->get('name');
//        $dao = $this->getDoctrine()->getEntityManager()
//                ->getRepository('High5HospitalDataAccessLayerBundle:Patient');
//        $subQuery  = $this->getDoctrine()->getEntityManager()->createQueryBuilder()
//                ->select('person.id')
//                ->from('High5HospitalDataAccessLayerBundle:Personne', 'person')
//                ->where('(person.nom LIKE :word or person.prenom LIKE :word)')
//                ->andWhere('person.fkHopital = :hospitalId')
//                ->andWhere('person.classe = 2')
//                ->getQuery();
//        $queryBuilder = $this->getDoctrine()->getEntityManager()->createQueryBuilder();
//        $query = $dao->createQueryBuilder('yop')->select('p')
//                ->from('High5HospitalDataAccessLayerBundle:Patient', 'p')
//                ->where($queryBuilder->expr()->in('p.fkPersonne', $subQuery->getDQL()))
//                ->setParameter('word', '%' . $patientName . '%')
//                ->setParameter('hospitalId', $this->getActiveDoctor()->getFkPersonne()->getFkHopital()->getId())
//                ->getQuery();
//        $query->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true);

        $query = $this->getDoctrine()->getEntityManager()
            ->createQueryBuilder()
            ->addSelect(array('patient', 'person'))
            ->from('High5HospitalDataAccessLayerBundle:Patient', 'patient')
            ->leftJoin('patient.fkPersonne', 'person')
            ->where('(person.nom LIKE :word or person.prenom LIKE :word)')
            ->andWhere('person.fkHopital = :hospitalId')
            ->andWhere('person.classe = 2')
            ->setParameter('word', '%' . $patientName . '%')
            ->setParameter('hospitalId', $this->getActiveDoctor()->getFkPersonne()->getFkHopital()->getId())
            ->getQuery();

        $result = $query->getArrayResult();
        if ($result != null)
        {
            $view = $this->renderView("High5HospitalDoctorBundle:Default:patients.list.html.twig",
                    array('hospitalName' => $this->getActiveDoctor()->getFkPersonne()->getFkHopital()->getNom(),
                        'patients' => $result));
            $response = ["code" => 100, "success" => true, "result" => $view];
        }
        else
        {
            $response = ["code" => 100, "success" => false, "result" => "No match has been found"];
        }
        return new JsonResponse($response);
    }

    public function editPatientFileAction()
    {
        return $this->render("High5HospitalDoctorBundle:Default:edit.patient.file.html.twig");
    }

    public function findPatientAppointmentAction(Request $request)
    {
        $patientId = $request->get('id');
        $doctorId = $this->getActiveDoctor()->getId();
        $query = $this->getDoctrine()->getEntityManager()
            ->createQueryBuilder()
            ->addSelect(array('consultation', 'rdv'))
            ->from('High5HospitalDataAccessLayerBundle:Consultation', 'consultation')
            ->leftJoin('consultation.fkRdv', 'rdv')
            ->where('rdv.fkPatient = :patientId')
            ->andWhere('rdv.fkMedecin = :doctorId')
            ->setParameter('patientId', $patientId)
            ->setParameter('doctorId', $doctorId)
            ->getQuery();
        $data = $query->getArrayResult();
        if ($data != null)
        {
            $response = ["success" => true, "result" => $data[0]];   
        }
        else
        {
            $response = ["success" => false, "result" => "No appointment was found for the requested patient"];
        }
        return new JsonResponse($response);
    }

    public function savePatientAppointmentInfoAction(Request $request)
    {
        $patientId = $request->get('id');
        $doctorId = $this->getActiveDoctor()->getId();
        $query = $this->getDoctrine()->getEntityManager()
            ->createQueryBuilder()
            ->addSelect(array('consultation', 'rdv'))
            ->from('High5HospitalDataAccessLayerBundle:Consultation', 'consultation')
            ->leftJoin('consultation.fkRdv', 'rdv')
            ->where('rdv.fkPatient = :patientId')
            ->andWhere('rdv.fkMedecin = :doctorId')
            ->setParameter('patientId', $patientId)
            ->setParameter('doctorId', $doctorId)
            ->getQuery();
        $data = $query->getArrayResult();
        if ($data != null)
        {
            if ($request->get('desc') != null)
            {
                $dao = $this->getDoctrine()->getEntityManager()
                    ->getRepository('High5HospitalDataAccessLayerBundle:Consultation');
                $appointmentInfo = $dao->find($data[0]['id']);
                $appointmentInfo->setDescription($request->get('desc'));
                $this->getDoctrine()->getEntityManager()->persist($appointmentInfo);
                $this->getDoctrine()->getEntityManager()->flush();
            }
            $response = ["success" => true, "result" => "Changes were successfully saved"];   
        }
        else
        {
            $response = ["success" => false, "result" => "An error occured while trying to save patient appointment info"];
        }
        return new JsonResponse($response);
    }

}
