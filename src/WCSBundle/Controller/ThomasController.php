<?php

namespace WCSBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ThomasController extends Controller
{

  public function indexAction($nom, $date)
    {
        return $this->render('WCSBundle:Default:index.html.twig', array('identite'=>$nom, 'age'=>$date));
    }
}
