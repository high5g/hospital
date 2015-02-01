<?php

namespace High5\Hospital\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use High5\Hospital\DataAccessLayerBundle\Entity\Hopital;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('High5HospitalAdminBundle:Default:index.html.twig', array('name' => $name));
    }
       
    public function createHospitalAction(Request $request)
    {
        $hospital = new Hopital();
        $form = $this->createFormBuilder($hospital)
            ->add('nom', 'text')
            ->add('adresse', 'textarea')
            ->add('insert', 'submit', array('label' => 'Create Hospital'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid())
        {
            $doctrineManager = $this->getDoctrine()->getManager();
            $doctrineManager->persist($hospital);
            $doctrineManager->flush();
        }
        return $this->render('High5HospitalAdminHospitalBundle:Default:hospital.factory.html.twig',
                array('form' => $form->createView()));
    }
}
