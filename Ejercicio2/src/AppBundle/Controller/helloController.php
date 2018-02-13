<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class helloController extends Controller

{
    public function saludoAction($name)
    {
        return $this->render('hello/hello.html.twig',array('name' => $name) );
    }
    public function fijoAction()
    {
        $name = 'mundo';
        return $this->render('hello/hello.html.twig',array('name' => $name) );
    }
}
