<?php

namespace myblog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    public function RegisterAction()
    {
        return $this->render('BlogBundle:Register:register.html.twig');
    }

    public function AgreementAction()
    {
    	return $this->render('BlogBundle:Register:agreement.html.twig');
    }
}
