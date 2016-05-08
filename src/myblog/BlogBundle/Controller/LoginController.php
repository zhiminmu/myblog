<?php

namespace myblog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Login:index.html.twig');
    }
}
