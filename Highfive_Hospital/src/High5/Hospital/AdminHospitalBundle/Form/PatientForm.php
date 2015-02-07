<?php

namespace High5\Hospital\AdminHospitalBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use High5\Hospital\AdminHospitalBundle\Form\PersonForm;
use High5\Hospital\DataAccessLayerBundle\Entity\Patient;

class PatientForm extends PersonForm
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('idCouvertureSociale', 'number', array('label' => 'Id couverture sociale'))
            ->add('dateEntree', 'date', array('label' => 'Date d\'entrée'))
            ->add('dateSortie', 'date', array('label' => 'Date de sortie'))
            ->add('insert', 'submit', array('label' => 'Add patient'));
    }

    public function parseFormData($data)
    {
        $person = parent::parseFormData($data);
        $patient = new Patient();
        $patient->setClasse(2);
        $patient->setIdCouvertureSociale($data['idCouvertureSociale']);
        $patient->setDateEntree($data['dateEntree']);
        $patient->setDateSortie($data['dateSortie']);
        $patient->setFkPersonne($person);
        return $patient;
    }
}
