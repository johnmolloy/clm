<?php

namespace CLM\MfrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($mfrname)
    {
        return $this->render('CLMMfrBundle:Default:index.html.twig', array('mfrname' => $mfrname));
    }
}
