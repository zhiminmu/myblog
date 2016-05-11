<?php

namespace myblog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function LoginAction()
    {
        return $this->render('BlogBundle:Login:login.html.twig');
    }
}
