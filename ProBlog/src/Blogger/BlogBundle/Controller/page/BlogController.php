<?php

namespace Blogger\BlogBundle\Controller\page;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
/**
* @Route("/blog/{id}", name="show", requirements={"id"="\d+"})
*/
public function showAction($id){
  $em = $this->getDoctrine()->getManager();
  $blog = $em->getRepository("BloggerBlogBundle:Blog")->find($id);
  $comments = $em->getRepository("BloggerBlogBundle:Comment")->getCommentsForBlog($blog->getId());
  if(!$blog){
    throw $this->createNotFoundException('Unable to find the post');
  }
  if(!$comments){
    throw $this->createNotFoundException('Unable to find the comments');
  }
  return $this->render('@BloggerBlog/Blog/show.html.twig',array(
    'blog' => $blog,
    'comments' => $comments
  ));
}

}
?>
