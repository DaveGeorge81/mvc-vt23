<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerTwig extends AbstractController
{
    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        if ($number % 2 == 1)
            $pic = "odd";
        else
            $pic = "even";

        $data = [
            'number' => $number,
            'pic' =>$pic
        ];

        return $this->render('lucky.html.twig', $data,);
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/kmom01", name: "kmom01")]
    public function kmom01(): Response
    {
        return $this->render('kmom01.html.twig');
    }

}
