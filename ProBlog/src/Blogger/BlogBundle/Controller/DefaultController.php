<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  //Hemos modificado la anotación de la ruta
    /**
     * @Route("/blog")
     */
    public function indexAction()
    {
        return $this->render('@BloggerBlog/Default/index.html.twig');  //de este modo referenciamos al bundle que hemos creado
    }
}
