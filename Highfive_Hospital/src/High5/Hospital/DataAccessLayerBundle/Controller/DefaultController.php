<?php

namespace High5\Hospital\DataAccessLayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('High5HospitalDataAccessLayerBundle:Default:index.html.twig', array('name' => $name));
    }
}
