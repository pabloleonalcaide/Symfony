<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MultiplicaController extends Controller
{
    /**
     * @Route("/multiplica/{number}")
     */
    public function multiplicaAction($number)
    {
        $cadena = '';
        for($i=1; $i<10; $i++){
            $result = $i*$number;
            $cadena = $cadena.$i.' x '.$number.' = '.$result." \n ";
        }
        return $this->render('tabla.html.twig', array(
            'tabla'=> $cadena,
            'number' => $number
            ));
    }
}
