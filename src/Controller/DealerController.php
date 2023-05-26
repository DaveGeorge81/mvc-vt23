<?php

namespace App\Controller;

use App\Entity\Dealer;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\DealerRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DealerController extends AbstractController
{
    #[Route('/dealer/add', name: 'add_dealer')]
    public function addDealer(): Response
    {
        return $this->render(
            'dealer/new-dealer.html.twig'
        );
    }

    #[Route('/dealer/create', name: 'dealer_create', methods: ['POST'])]
    public function createDealer(
        Request $request,
        DealerRepository $dealerRepository
    ): Response {
        $dealers = $dealerRepository;

        $dealer = new dealer();
        /**
         * @var int
         */
        $handsPlayed = $request->request->get('played');

        /**
         * @var int
         */
        $handsWon = $request->request->get('won');

        /**
         * @var int
         */
        $handsLost = $request->request->get('lost');

        /**
         * @var int
         */
        $handsPush = $request->request->get('push');


        $dealer->setHandsPlayed($handsPlayed);
        $dealer->setHandsWon($handsWon);
        $dealer->setHandsLost($handsLost);
        $dealer->setHandsPush($handsPush);

        $dealers->save($dealer, true);

        $this->addFlash(
            'success',
            'Added new dealer with id '.$dealer->getId()
        );

        return $this->redirectToRoute('dealer_show_all');
    }

    #[Route('/dealer/show', name: 'dealer_show_all')]
    public function showAllDealers(
        DealerRepository $dealerRepository
    ): Response {
        $dealers = $dealerRepository
            ->findAll();

        $data = [
            "dealers" =>  $dealers
        ];
        return $this->render('dealer/all-dealers.html.twig', $data);
    }

    #[Route('/dealer/show/{id}', name: 'dealer_by_id')]
    public function showDealerById(
        DealerRepository $dealerRepository,
        int $id
    ): Response {
        $dealer = $dealerRepository
            ->find($id);

        $data = [
            "dealer" =>  $dealer
        ];
        return $this->render('books/single-book.html.twig', $data);
    }


    #[Route('/dealer/delete', name: 'dealer_delete', methods: ['POST'])]
    public function deleteDealer(
        DealerRepository $dealerRepository,
        Request $request
    ): Response {
        $dealer = $dealerRepository->find($request->request->get('id'));

        if (!$dealer) {
            throw $this->createNotFoundException(
                'No dealer found for id '.$request->request->get('id')
            );
        }

        $dealerRepository->remove($dealer, true);
        $this->addFlash(
            'success',
            'Deleted book with id '.$dealer->getId()
        );

        return $this->redirectToRoute('books_show_all');
    }

    #[Route('/dealer/delete/{id}', name: 'del_dealer_by_id')]
    public function deleteDealerById(
        DealerRepository $dealerRepository,
        int $id
    ): Response {
        $dealer = $dealerRepository
            ->find($id);

        $data = [
            "dealer" =>  $dealer
        ];
        return $this->render('books/delete-book.html.twig', $data);
    }


    #[Route('/dealer/update', name: 'dealer_update', methods: ['POST'])]
    public function updateDealer(
        DealerRepository $dealerRepository,
        Request $request,
    ): Response {
        $dealer = $dealerRepository->find($request->request->get('id'));

        if (!$dealer) {
            throw $this->createNotFoundException(
                'No dealer found for id '.$request->request->get('id')
            );
        }

        /**
         * @var int
         */
        $handsPlayed = $request->request->get('played');

        /**
         * @var int
         */
        $handsWon = $request->request->get('won');

        /**
         * @var int
         */
        $handsLost = $request->request->get('lost');

        /**
         * @var int
         */
        $handsPush = $request->request->get('push');

        $dealer->setHandsPlayed($handsPlayed);
        $dealer->setHandsWon($handsWon);
        $dealer->setHandsLost($handsLost);
        $dealer->setHandsPush($handsPush);
        $dealerRepository->save($dealer, true);
        $this->addFlash(
            'success',
            'Updated dealer with id '.$dealer->getId()
        );


        return $this->redirectToRoute('dealer_show_all');
    }

    #[Route('/dealer/update/{id}', name: 'update_dealer_by_id')]
    public function updateDealerById(
        SessionInterface $session,
        DealerRepository $dealerRepository,
        int $id
    ): Response {
        $dealer = $dealerRepository
            ->find($id);

        $dbDealer = $session->get('db-dealer');

        $data = [
            "dealer" =>  $dealer,
            "db_dealer" => $dbDealer
        ];
        return $this->render('dealer/update-dealer.html.twig', $data);
    }
}
