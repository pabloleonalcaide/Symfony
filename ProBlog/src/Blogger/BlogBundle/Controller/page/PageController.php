<?php

namespace Blogger\BlogBundle\Controller\page;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Repository\BlogRepository;

class PageController extends Controller
{
/**
* @Route("/blog", name="index")
*/
  public function indexAction(){
    $em = $this->getDoctrine()->getManager();
    $blogs = $em ->getRepository('BloggerBlogBundle:Blog')
                  ->getLatestBlog();
    return $this->render('@BloggerBlog/index.html.twig',array('blogs'=>$blogs));
  }
  /**
* @Route("/about", name="about")
*/
public function aboutAction(){
  return $this->render('@BloggerBlog/about.html.twig');
}
/**
* @Route("/contact", name="contact")
*/
public function contactAction(Request $request){
  $enquiry = new Enquiry(); //creamos entidad consulta
  $form = $this->createForm(EnquiryType::class, $enquiry); //creamos formulario
  $form->handleRequest($request); //creamos manejador
  if($form->isSubmitted()){ // si se ha enviado
      if($form->isValid()){// si es válido
        $message= \Swift_Message::newInstance()
          ->setSubject("Contact enquiry from symblog")
          ->setFrom("pabloleonpsico@gmail.com")
          ->setTo("pabloleonpsico@gmail.com")
          ->setBody($this->renderView('@BloggerBlog/contactMail.txt.twig', array('enquiry'=>$enquiry)));

          $this->get('mailer')->send($message);
          // $this->addFlash("notice", "Mensaje enviado");
          // return $this->redirectToRoute('home');
    }
}
  return $this->render('@BloggerBlog/contact.html.twig',array(
    'form'=>$form->createView()));
}
}
?>
