<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerJson
{
    #[Route("/api/lucky/number")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'lucky-number' => $number,
            'lucky-message' => 'Hi there!',
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
    
    #[Route("/api/quote", name: "quote")]
    public function quote(): Response
    {
        $quotes = ["Today is your first day in your new life.",
            "Det lönar sig inte att springa om man är på fel väg.",
            "Man skådar icke given häst i munnen.",
            "Även den första resa börjar med ett enda steg.",
            "Bättre lite skit i hörnen än ett rent helvete."];
        $number = random_int(0,4);

        $data = [
            'quote' => $quotes[$number],
            'date' => date("Y-m-d"),
            'timestamp' => time()
        ];
        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }
}