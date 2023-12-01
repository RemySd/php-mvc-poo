<?php

namespace App\Controllers;

class HomeController
{
    public function getHome()
    {
        include_once BASE_PATH . '/templates/index.php';
    }
}
