<?php

namespace Blogger\BlogBundle\Controller\page;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PageController extends Controller
{
/**
* @Route("/blog", name="index")
*/
public function indexAction()
{
return $this->render('@BloggerBlog/index.html.twig');
}
/**
* @Route("/about", name="about")
*/
public function aboutAction()
{
return $this->render('@BloggerBlog/about.html.twig');
}
/**
* @Route("/contact", name="contact")
*/
public function contactAction()
{
return $this->render('@BloggerBlog/contact.html.twig');
}
}
