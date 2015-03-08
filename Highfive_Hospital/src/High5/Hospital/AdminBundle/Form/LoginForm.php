<?php

namespace High5\Hospital\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text', array('label' => 'Username', 'attr' => array('class' => 'form-control')));
        $builder->add('password', 'password', array('label' => 'Password', 'attr' => array('class' => 'form-control')));
        $builder->add('Login', 'submit');
    }

    public function getName()
    {
        return 'login';
    }
}