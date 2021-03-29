<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Uploads;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {       
        return $this->render('main/index.html.twig', [
            'controller_name' => 'PageController'
        ]);
    }

    /**
     * @Route("/upload", name="upload")
     */
    public function upload(): Response
    {
        return $this->render('upload/upload_files.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
