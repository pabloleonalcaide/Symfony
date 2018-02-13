<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  //Hemos modificado la anotación de la ruta
    /**
     * @Route("/Blog")
     */
    public function indexAction()
    {
        return $this->render('@BloggerBlog/index.html.twig');  //de este modo referenciamos al bundle que hemos creado
    }
}