<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Admin/Default/index.html.twig');

    }

    /**
     * @Route("/adminpanel", name="adminpanel")
     */
    public function adminAction(Request $request)
    {
        return $this->render('Admin/Default/login.html.twig');

    }
}
