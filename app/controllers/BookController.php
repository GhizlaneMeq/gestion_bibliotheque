<?php

namespace App\controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\dao\BookDao;
use App\dao\ReservationDao;

class BookController
{
    public function redirectFilter(){
        $bookDao = new BookDao();
        $books = $bookDao->getBooks();
        $page = '../../views/includes/filter.php';
        include_once '../../views/layout.php';
    }
    public function redirectAdminToBook()
    {
        $bookDao = new BookDao();
        $books = $bookDao->getBooks();

        $page = '../../views/admin/Books/display.php';
        include_once '../../views/layout.php';
    }

    public function searchBook()
    {
        $bookDao = new BookDao();
        $search = $_GET['search'];
        $searchResults = $bookDao->searchBooks($search);
        $page = '../../views/index.php';
        include_once '../../views/layout.php';
    }

    public function getBookById()
    {
        $bookDao = new BookDao();
        $book = $bookDao->getBookById(isset($_GET['id']) ? $_GET['id'] : '');
        $page = '../../views/client/reservation.php';
        include_once '../../views/layout.php';
    }
    public function reserveBook()
    {
        $book= new BookDao;
        $reserveDao = new ReservationDao();
        $reserve = $reserveDao->create(isset($_POST['id']) ? $_POST['id'] : '');
        $book->UpdateBookAvailableCopies(isset($_POST['id']) ? $_POST['id'] : '');
        header('location:home');
    }
}
