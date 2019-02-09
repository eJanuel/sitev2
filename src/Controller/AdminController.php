<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminController extends AbstractController {
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index() {
        return $this->render('admin/dashboard.html.twig');
    }
}