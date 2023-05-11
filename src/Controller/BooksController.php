<?php

namespace App\Controller;

use App\Entity\Books;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BooksRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BooksController extends AbstractController
{
    #[Route('/library', name: 'library')]
    public function index(): Response
    {
        return $this->render('books/library.html.twig');
    }


    #[Route('/library/create', name: 'book_create', methods: ['POST'])]
    public function createBook(
        Request $request,
        BooksRepository $booksRepository
    ): Response {
        $books = $booksRepository;

        $book = new Books();
        /**
         * @var string
         */
        $title = $request->request->get('title');

        /**
         * @var string
         */
        $author = $request->request->get('author');

        /**
         * @var int
         */
        $isbn = $request->request->get('isbn');

        /**
         * @var string
         */
        $cover = $request->request->get('cover');

        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setIsbn($isbn);
        $book->setCover($cover);

        $books->save($book, true);

        $this->addFlash(
            'success',
            'Added new book with id '.$book->getId()
        );

        return $this->redirectToRoute('books_show_all');
    }


    // #[Route('/library/create', name: 'book_create', methods: ['POST'])]
    // public function createBook(
    //     Request $request,
    //     ManagerRegistry $doctrine
    // ): Response {
    //     $entityManager = $doctrine->getManager();

    //     $book = new Books();
    //     $book->setTitle($request->request->get('title'));
    //     $book->setAuthor($request->request->get('author'));
    //     $book->setIsbn($request->request->get('isbn'));
    //     $book->setCover($request->request->get('cover'));

    //     // tell Doctrine you want to (eventually) save the Product
    //     // (no queries yet)
    //     $entityManager->persist($book);

    //     // actually executes the queries (i.e. the INSERT query)
    //     $entityManager->flush();
    //     $this->addFlash(
    //         'success',
    //         'Added new book with id '.$book->getId()
    //     );

    //     return $this->redirectToRoute('books_show_all');
    // }

    #[Route('/library/add', name: 'add_book')]
    public function addBook(): Response
    {
        return $this->render(
            'books/new-book.html.twig'
        );
    }


    #[Route('/library/show', name: 'books_show_all')]
    public function showAllBooks(
        BooksRepository $booksRepository
    ): Response {
        $books = $booksRepository
            ->findAll();

        $data = [
            "books" =>  $books
        ];
        return $this->render('books/all-books.html.twig', $data);
    }


    #[Route('/library/show/{id}', name: 'book_by_id')]
    public function showBookById(
        BooksRepository $booksRepository,
        int $id
    ): Response {
        $book = $booksRepository
            ->find($id);

        $data = [
            "book" =>  $book
        ];
        return $this->render('books/single-book.html.twig', $data);
    }


    #[Route('/library/delete', name: 'book_delete', methods: ['POST'])]
    public function deleteBook(
        BooksRepository $booksRepository,
        Request $request
    ): Response {
        $book = $booksRepository->find($request->request->get('id'));

        if (!$book) {
            throw $this->createNotFoundException(
                'No product found for id '.$request->request->get('id')
            );
        }

        $booksRepository->remove($book, true);
        $this->addFlash(
            'success',
            'Deleted book with id '.$book->getId()
        );

        return $this->redirectToRoute('books_show_all');
    }

    #[Route('/library/delete/{id}', name: 'delete_by_id')]
    public function deleteBookById(
        BooksRepository $booksRepository,
        int $id
    ): Response {
        $book = $booksRepository
            ->find($id);

        $data = [
            "book" =>  $book
        ];
        return $this->render('books/delete-book.html.twig', $data);
    }


    #[Route('/library/update', name: 'book_update', methods: ['POST'])]
    public function updateBook(
        BooksRepository $booksRepository,
        Request $request,
    ): Response {
        $book = $booksRepository->find($request->request->get('id'));

        if (!$book) {
            throw $this->createNotFoundException(
                'No product found for id '.$request->request->get('id')
            );
        }

        /**
         * @var string
         */
        $title = $request->request->get('title');

        /**
         * @var string
         */
        $author = $request->request->get('author');

        /**
         * @var int
         */
        $isbn = $request->request->get('isbn');

        /**
         * @var string
         */
        $cover = $request->request->get('cover');

        $book->setTitle($title);
        $book->setAuthor($author);
        $book->setIsbn($isbn);
        $book->setCover($cover);
        $booksRepository->save($book, true);
        $this->addFlash(
            'success',
            'Updated book with id '.$book->getId()
        );


        return $this->redirectToRoute('books_show_all');
    }

    #[Route('/library/update/{id}', name: 'update_by_id')]
    public function updateBookById(
        BooksRepository $booksRepository,
        int $id
    ): Response {
        $book = $booksRepository
            ->find($id);

        $data = [
            "book" =>  $book
        ];
        return $this->render('books/update-book.html.twig', $data);
    }
}
