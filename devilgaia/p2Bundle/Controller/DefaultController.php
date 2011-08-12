<?php

namespace devilgaia\p2Bundle\Controller;

use devilgaia\p2Bundle\Entity\secciones;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    

    
    public function seccionAction($seccion)
    {
        
        //$secciones = array('portada','accidentes','atto','noticias','practicar','acerca','contacto');
        $secciones = $this->getDoctrine()->getRepository('p2Bundle:secciones')->findAll();
        
        $contenido = $this->renderView('p2Bundle:secciones:'.$seccion.'.html.twig', array('seccion' => $seccion,'secciones' => $secciones));
       
        return new response($contenido);
        
    }
}
