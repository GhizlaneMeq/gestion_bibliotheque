<?php
namespace App\controllers;

use App\dao\UserDao;

class HomeController
{
    public function index()
    {
        $userDao = new UserDao;
        $users = $userDao->getUsers();

        $page = '../../views/index.php';
        include_once '../../views/layout.php';
    }

}
?>
