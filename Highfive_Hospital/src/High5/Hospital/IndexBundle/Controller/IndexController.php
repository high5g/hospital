<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace High5\Hospital\IndexBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Description of IndexController
 *
 * @author King
 */
class IndexController  extends Controller{
        public function indexAction()
    {
        return $this->render('High5HospitalIndexBundle:Default:index.html.twig');
    }
}
