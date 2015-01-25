<?php

namespace High5\Hospital\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('High5HospitalAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
