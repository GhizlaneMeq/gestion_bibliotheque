<?php

namespace App\routes;

class Redirect
{
    public static function redirectTo($page)
    {
        
        include_once '../../views/layout.php';
        exit();
    }
}
