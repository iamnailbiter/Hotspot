<?php

namespace HotspotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HotspotBundle:Default:index.html.twig', array('name' => $name));
    }
}
