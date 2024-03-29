<?php

namespace App\controllers;


require __DIR__ . '/../../vendor/autoload.php';


use App\dao\UserDao;
use App\dao\BookDao;


class AuthController
{
    public function redirectLogin()
    {
        
        $page = '../../views/auth/login.php';
        include_once '../../views/layout.php';
        
    }
    public function redirectRegister()
    {

        $page = '../../views/auth/register.php';
        include_once '../../views/layout.php';
    }
    public function redirectAdmin()
    {
        $bookDao= new BookDao;
        $books=$bookDao->getMostReservedBooks();
        $userDao= new UserDao;
        $users=$userDao->getMostActiveUsers();
        $page = '../../views/admin/index.php';
        include_once '../../views/layout.php';
    }
    public function redirectAdminToUser()
    {
        $userDao = new UserDao;
        $users = $userDao->getUsers();
        $page = '../../views/admin/users/display.php';
        include_once '../../views/layout.php';
    }

    public function register()
    {
        $error = '' /* $this->validateRegister($firstname, $lastname, $email, $phone, $password, $confirmPassword) */;

        if (empty($error)) {
            $user = new UserDao();
            $exist = $user->getUserByEmail($_POST['email']);

            echo $_POST['email'];
            if ($exist) {
                $error = 'Username or email has already been taken';
                echo $error;
            } elseif ($_POST['password'] !== $_POST['confirm_password']) {
                $error = 'Passwords do not match';
                echo $error;
            } else {
                $user->createUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['password']);
                header("Location:login");
                exit();
            }
        } else echo 'invalid inputs' . $error;
    }

    public function login()
    {
        $user = new UserDao();
        $exist = $user->getUserByEmail($_POST['email']);

        if ($exist) {
            if (password_verify($_POST['password'], $exist->getPassword())) {
                $exist->getEmail();
                switch ($exist->getRole()) {
                    case 1:
                        $_SESSION['isAdmin'] = true;
                        $_SESSION['userId'] = $exist->getId();
                        header('location:dashboard');
                        break;
                    case 2:
                        echo 'moderator';
                        // header('location:../../views/moderator/home.php');
                        break;

                    case 3:
                        $_SESSION['isAdmin'] = false;
                        $_SESSION['userId'] = $exist->getId();

                        header('location:home');
                        break;

                    default:
                        echo 'undefined user role';
                        break;
                }
            } else {
                $_SESSION['error'] = 'Incorrect password';
            }
        } else {
            $_SESSION['error'] = 'User not found';
        }
    }

    public function logout()
    {
        session_destroy();
        header("location: login");
        exit();
    }

    private function validateRegister($firstname, $lastname, $email, $phone, $password, $confirmPassword)
    {
        $error = '';
        if (empty($firstname)) {
            $error .= 'First name is required. ';
        }


        if (!empty($error)) {
            $error = 'Please fix the following errors: ' . $error;
        }

        return $error;
    }
} 




/*
if (isset($_POST['logout'])) {
    $authentication = new AuthController();
    $authentication->logout();
}
 */