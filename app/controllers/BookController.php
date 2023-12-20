<?php
namespace App\controllers;
require __DIR__ . '/../../vendor/autoload.php';
use App\dao\BookDao;

class BookController{
    public function redirectAdminToBook(){
        $bookDao = new BookDao();
        $books = $bookDao->getBooks();
        $page = '../../views/admin/Books/display.php';
        include_once '../../views/layout.php';
    }
}


?>