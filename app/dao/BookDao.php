<?php
namespace App\dao;
use App\models\Book;
use App\database\Database;
use PDO;

class BookDao{
    private $database;
    public function __construct()
    {
        $this->database = Database::getInstance();
    }

    public function create(){

    }
    public function getBooks()
    {
        $query = $this->database->getConnection()->query("SELECT * FROM `books`");
        $booksData = $query->fetchAll(PDO::FETCH_ASSOC);

        $books = [];
        if(empty($booksData)){
            return 'njbjbhbvhbhh';
        }else{
        foreach ($booksData as $bookData) {
            $books[] = new Book($bookData['title'],$bookData['author'],$bookData['genre'],$bookData['description'],$bookData['publication_year'],$bookData['total_copies'],$bookData['available_copies']);
           
        }

    }
        return $books;
    }

}

?>