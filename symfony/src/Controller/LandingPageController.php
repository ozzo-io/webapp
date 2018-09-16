<?php
/**
 *
 */
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandingPageController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function index() {
        return $this->render('landingPage/a.html.twig');
    }
}