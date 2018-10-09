<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    public function chartsAction()
    {
        return $this->render('AdminBundle:Default:charts.html.twig');
    }
    
    public function tablesAction()
    {
        return $this->render('AdminBundle:Default:tables.html.twig');
    }
}
