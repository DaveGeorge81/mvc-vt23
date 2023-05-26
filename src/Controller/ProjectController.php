<?php

namespace App\Controller;

use Exception;

use App\Utils\Utils;
use App\Card\BlackJackDeck;
use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\DeckOfCards;
use App\Card\CardPlayer;
use App\Helper\Helper;

use App\Entity\Dealer;

use App\Repository\DealerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route("/proj", name: "project")]
    public function project(
    ): Response {
        $util = new Utils();

        $deck = new BlackJackDeck();
        $deck->shuffleDeck();
        $singleCard = $deck->hitCard();
        $stat = $deck->countingCards();


        $data = [
            "hej" =>  $util,
            "card" => $singleCard->getAsString(),
            "value" => $singleCard->getValue(),
            "left" => $deck->getNumberCards(),
            "stat" => $stat
        ];
        return $this->render('proj/project.html.twig', $data);
    }

    #[Route("/proj/about", name: "proj_about")]
    public function about(
    ): Response {
        return $this->render('proj/about.html.twig');
    }

    #[Route("/proj/api", name: "proj_api")]
    public function api(): Response
    {
        return $this->render('/proj/api.html.twig');
    }

    #[Route("/proj/about/database", name: "proj_database")]
    public function doc(): Response
    {
        return $this->render('/proj/database.html.twig');
    }

    #[Route("/proj/about/features", name: "proj_features")]
    public function features(): Response
    {
        return $this->render('/proj/features.html.twig');
    }

}
