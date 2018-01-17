<?php

namespace test\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('testUserBundle:Default:index.html.twig');
    }
}
