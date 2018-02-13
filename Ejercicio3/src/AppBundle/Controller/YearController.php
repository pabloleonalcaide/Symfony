<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class YearController extends Controller
{
    public function CalcularAction($year)
    {
		 $edad = ($year - 1988);
        return $this->render('year/year.html.twig', array('year' => $edad,));
    }
    public function vacioAction()
   {
       $name = 'undefined';
       return $this->render('year/year.html.twig',array('year' => $name) );
   }
}

?>
