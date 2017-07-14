<?php

namespace ApiDestructionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ApiDestructionBundle:Default:index.html.twig');
    }

    /**
     * @Route("/amorzinho")
     */
    public function amorzinhoAction()
    {
        return new Response("Te amo muito mais sempre <3", 200);
    }
}
