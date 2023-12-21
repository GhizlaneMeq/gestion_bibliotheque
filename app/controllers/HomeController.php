<?php
namespace App\controllers;


use App\dao\BookDao;

class HomeController
{
    public function index()
    {
        $BookDao = new BookDao;
        $books = $BookDao->getBooks();

        $page = __DIR__.'/../../views/index.php';
        include_once __DIR__.'/../../views/layout.php';
    }

}
?>
