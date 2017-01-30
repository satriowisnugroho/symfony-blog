<?php

namespace AppBundle\Controller;

use AppBundle\Helper\Auth;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminPage()
    {
        if(Auth::check($this))
            return $this->render('admin/index.html.twig');
        else
            return $this->redirectToRoute('login');

    }
}
