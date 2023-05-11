<?php

namespace App\Controller;

use App\Entity\Books;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BooksRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BooksControllerJson extends AbstractController
{
    #[Route('/api/library/books', name: 'all_books_api')]
    public function showAllBooks(
        BooksRepository $booksRepository
    ): Response {
        $books = $booksRepository
            ->findAll();

        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }


    #[Route('/api/library/book/{isbn}', name: 'book_by_isbn')]
    public function showBookByIsbn(
        BooksRepository $booksRepository,
        int $isbn
    ): Response {
        $book = $booksRepository
            ->findOneByIsbn($isbn);

        $response = $this->json($book);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        );
        return $response;
    }


    // #[Route('/library/delete/{id}', name: 'book_delete_by_id')]
    // public function deleteBookById(
    //     BooksRepository $booksRepository,
    //     int $id
    // ): Response {
    //     $book = $booksRepository->find($id);

    //     if (!$book) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$id
    //         );
    //     }

    //     $booksRepository->remove($book, true);

    //     return $this->redirectToRoute('books_show_all');
    // }
}
