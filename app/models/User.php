<?php

namespace App\models;
require __DIR__ . '/../../vendor/autoload.php';

class User
{

    private $email;
    private $password;
    private $firstname;
    private $lastname;
    private $phone;
    private $role;
    public function __construct($firstname, $lastname, $email, $phone, $password,$role)
    {
        $this->firstname =$firstname;
        $this->lastname =$lastname;
        $this->email =$email;
        $this->phone =$phone;
        $this->password =$password;
        $this->role =$role;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email=$email;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function setFirstname($firstname)
    {
        return $this->firstname=$firstname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        return $this->lastname=$lastname;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        return $this->phone=$phone;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        return $this->password=$password;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        return $this->role=$role;
    }



}
