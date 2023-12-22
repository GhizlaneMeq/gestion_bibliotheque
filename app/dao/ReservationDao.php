<?php 
namespace App\dao;
use App\models\Reservation;
use App\database\Database;
use PDO;

class ReservationDao{
    private $database;
    public function __construct()
    {
        $this->database= Database::getInstance();
    }

    public function create($id)
    {
        $userId = $_SESSION['userId'];
        $reservationDate = date("Y-m-d");
        $returnDate = date("Y-m-d", strtotime($reservationDate . "+15 days"));

        $reservationDateString = $this->database->getConnection()->quote($reservationDate);
        $returnDateString = $this->database->getConnection()->quote($returnDate);

        $query = $this->database->getConnection()->query("INSERT INTO `reservations` 
        (`reservation_date`, `return_date`, `book_id`, `user_id`)
         VALUES ($reservationDateString, $returnDateString, $id, $userId)");
    }

    public function displayAll(){
        $query="SELECT reservations.*, users.firstname, users.lastname, books.title FROM reservations
        JOIN users ON users.id= .reservations.user_id
        JOIN books ON reservations.book_id=books.id";
        $query=$this->database->getConnection()->query($query);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $reservations=[];

        if(empty($results)){
            return [];
        }else{
            $reservations[]= new Reservation($results->id,$results->description, $results->reservation_date, $results->return_date, $results->is_returned, $results->title, $results->firstname.' '.$results->lastname);
        }
        
        return $reservations;
    }

}



?>