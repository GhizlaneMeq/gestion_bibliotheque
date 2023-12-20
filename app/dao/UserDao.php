<?php

namespace App\dao;

require __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;
use PDO;
use App\models\User;

class UserDao
{
    private $database;
    public function __construct()
    {
        $this->database = Database::getInstance();
    }
    public function getDatabase(){
        return $this->database;
    }
   

    public  function createUser($firstname, $lastname, $email, $phone, $password)
    {

        $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `phone`) VALUES (?,?,?,?,?)";
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->getDatabase()->getConnection()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $email, $hashedPassword, $phone]);
    }

    public  function getUserByEmail($email)
    {

        $query = "SELECT * FROM `users` WHERE `email` = ? LIMIT 1";
        $stmt = $this->database->getConnection()->prepare($query);
        $stmt->execute([$email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            echo 'eee';

            return new User($userData['firstname'], $userData['lastname'], $email, $userData['phone'], $userData['password']);
        } else {
            echo 'doesnt';
            return null;
        }
    }

    public function getUsers()
    {
        $query = $this->database->getConnection()->query("SELECT * FROM `users`");
        $userData = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = array();

        if (empty($userData)) {
            echo 'rachid';
        } else {
            foreach ($userData as $userRow) {
                $users[] = new User($userRow['firstname'], $userRow['lastname'], $userRow['email'], $userRow['phone'], $userRow['password']);
            }
        }

        return $users;
    }
}
