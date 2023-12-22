<?php
namespace App\models;


class Reservation
{
    private $id;
    private $description;
    private $reservation_date;
    private $return_date;
    private $is_returned;
    private $book;
    private $user; 

    public function __construct($id,$description,$reservation_date,$return_date,$is_returned,$book,$user)
    {
        $this->id=$id;
        $this->description=$description;
        $this->reservation_date=$reservation_date;
        $this->return_date=$return_date;
        $this->is_returned=$is_returned;
        $this->book=$book;
        $this->user=$user;

    }

    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

  
    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function getReservation_date(){
        return $this->reservation_date;
    }

    public function setReservation_date($reservation_date){
        $this->reservation_date=$reservation_date;
    }

    public function getIs_returned(){
        return $this->is_returned;
    }

    public function setIs_returned($is_returned){
        $this->is_returned=$is_returned;
    }

    public function getBook(){
        return $this->book;
    }

    public function setBook($book){
        $this->book=$book;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user=$user;
    }

}

?>