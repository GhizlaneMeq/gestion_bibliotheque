<?php

namespace App\dao;

use App\models\Book;
use App\database\Database;
use PDO;

class BookDao
{
    private $database;
    public function __construct()
    {
        $this->database = Database::getInstance();
    }

    public function create()
    {
    }
    public function UpdateBookAvailableCopies($id)
    {
        $query= $this->database->getConnection()->prepare("UPDATE `books` SET `available_copies` = `available_copies` - 1 WHERE `books`.`id` = :id");
        $query->bindValue(':id',$id,PDO::PARAM_INT);
        $query->execute();
    }
    public function searchBooks($search)
    {
        $query = $this->database->getConnection()->prepare("SELECT * FROM `books` WHERE `title` LIKE :search OR `author` LIKE :searchQuery");
        $query->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $query->execute();
        $booksData = $query->fetchAll(PDO::FETCH_ASSOC);

        $books = [];
        foreach ($booksData as $bookData) {
            $books[] = new Book(
                $bookData['id'],
                $bookData['title'],
                $bookData['author'],
                $bookData['genre'],
                $bookData['description'],
                $bookData['publication_year'],
                $bookData['total_copies'],
                $bookData['available_copies']
            );
        }
        return $books;
    }

   

    public function GetBookById($id)
    {
        $query = $this->database->getConnection()->query("SELECT * FROM `books` WHERE id=$id");
        $bookData = $query->fetch(PDO::FETCH_OBJ);
        $book = new Book($bookData->id, $bookData->title, $bookData->author, $bookData->genre, $bookData->description, $bookData->publication_year, $bookData->total_copies, $bookData->available_copies);
        return $book;
    }
    public function getBooks()
    {
        $query = $this->database->getConnection()->query("SELECT * FROM `books`");
        $booksData = $query->fetchAll(PDO::FETCH_ASSOC);

        $books = [];
        if (empty($booksData)) {
            return 'njbjbhbvhbhh';
        } else {
            foreach ($booksData as $bookData) {
                $books[] = new Book($bookData['id'], $bookData['title'], $bookData['author'], $bookData['genre'], $bookData['description'], $bookData['publication_year'], $bookData['total_copies'], $bookData['available_copies']);
            }
        }
        return $books;
    }
    public function getMostReservedBooks()
    {
        $query = "SELECT books.title, COUNT(reservations.id) AS reservation_count
              FROM books
              JOIN reservations ON books.id = reservations.book_id
              GROUP BY books.id
              ORDER BY reservation_count DESC
              LIMIT 3"; 

        $stmt = $this->database->getConnection()->query($query);
        $books=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }
}
