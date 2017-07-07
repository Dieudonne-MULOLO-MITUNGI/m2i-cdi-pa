<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Annonce');
        $annonces = $repo->findAll();
        return $this->render('AppBundle:Default:index.html.twig', array(
            "annonces"=> $annonces
        ));


        $repo = $this->getDoctrine()->getRepository('AppBundle:Utilisateur');
        $utilisateurs = $repo->findAll();
        return $this->render('AppBundle:Default:index.html.twig', array(
            "utlisateurs"=> $utilisateurs
        ));


    }

}
