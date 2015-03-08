<?php

namespace High5\Hospital\AdminHospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use High5\Hospital\DataAccessLayerBundle\Entity\Personne;

class PersonForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('cin', 'number', array('label' => 'N° CIN'))
            ->add('adresse', 'textarea', array('attr' => array('style' => 'width:100%')))
            ->add('telephone', 'number')
            ->add('username', 'text')
            ->add('mdp', 'password', array('label' => 'Mot de passe'));
    }

    public function parseFormData($data)
    {
        $person = new Personne();
        $person->setNom($data['nom']);
        $person->setPrenom($data['prenom']);
        $person->setCin($data['cin']);
        $person->setAdresse($data['adresse']);
        $person->setTelephone($data['telephone']);
        $person->setUsername($data['username']);
        $person->setMdp($data['mdp']);
        return $person;
    }

    public function getName()
    {
        return 'form';
    }
}
