<?php

namespace High5\Hospital\AdminHospitalBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use High5\Hospital\AdminHospitalBundle\Form\PersonForm;
use High5\Hospital\DataAccessLayerBundle\Entity\Medecin;

class DoctorForm extends PersonForm
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('specialite', 'text')
            ->add('tarifParConsultation', 'money', array('label' => 'Tarif consultation '))
            ->add('insert', 'submit', array('label' => 'Add doctor', 'attr' => array('class' => 'login login-submit')));
    }

    public function parseFormData($data)
    {
        $person = parent::parseFormData($data);
        $medecin = new Medecin();
        $medecin->setClasse(1);
        $medecin->setSpecialite($data['specialite']);
        $medecin->setTarifParConsultation($data['tarifParConsultation']);
        $medecin->setFkPersonne($person);
        return $medecin;
    }
}
