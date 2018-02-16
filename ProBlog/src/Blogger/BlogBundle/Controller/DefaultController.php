<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
/**
* @Route("/blog")
*/
public function indexAction()
{
return $this->render('@BloggerBlog/index.html.twig');
}
}