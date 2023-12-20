<?php

namespace App\dao;

require __DIR__ . '/../../vendor/autoload.php';

use App\database\Database;
use PDO, PDOException;
use App\models\User;

class UserDao
{
    private $database;
    public function __construct()
    {
        $this->database = Database::getInstance();
    }
    public function getDatabase()
    {
        return $this->database;
    }


    public function createUser($firstname, $lastname, $email, $phone, $password)
    {
        try {
            $this->getDatabase()->getConnection()->beginTransaction();

            $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `phone`) VALUES (?,?,?,?,?)";
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->getDatabase()->getConnection()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $email, $hashedPassword, $phone]);

            $userId = $this->getDatabase()->getConnection()->lastInsertId();

            $sqlUserRole = "INSERT INTO `role_user`(`role_id`, `user_id`) VALUES (3,?)";
            $stmtUserRole = $this->getDatabase()->getConnection()->prepare($sqlUserRole);
            $stmtUserRole->execute([$userId]);

            $this->getDatabase()->getConnection()->commit();
        } catch (PDOException $e) {
            $this->getDatabase()->getConnection()->rollBack();
            throw $e;
        }
    }


    public function getUserByEmail($email)
    {
        $query = "SELECT users.*, roles.id as role_id, roles.name as role_name 
              FROM `users` 
              JOIN role_user on role_user.user_id=users.id
              JOIN roles on role_user.role_id=roles.id 
              WHERE `email` = ? LIMIT 1";
        $stmt = $this->database->getConnection()->prepare($query);
        $stmt->execute([$email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData) {
            return new User($userData['firstname'], $userData['lastname'], $email, $userData['phone'], $userData['password'], $userData['role_id']);
        } else {
            echo 'doesnt';
            return null;
        }
    }


    public function getUsers()
    {
        $query = $this->database->getConnection()->query("SELECT users.*, roles.id as role_id, roles.name as role_name 
        FROM `users` 
        JOIN role_user on role_user.user_id=users.id
        JOIN roles on role_user.role_id=roles.id ");
        $userData = $query->fetchAll(PDO::FETCH_ASSOC);
        $users = array();

        if (empty($userData)) {
            echo 'rachid';
        } else {
            foreach ($userData as $userRow) {
                $users[] = new User($userRow['firstname'], $userRow['lastname'], $userRow['email'], $userRow['phone'], $userRow['password'],$userRow['role_id']);
            }
        }

        return $users;
    }
}
