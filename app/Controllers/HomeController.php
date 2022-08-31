<?php

namespace App\Controllers;


use JRCologne\Utils\Database\DB;
use JRCologne\Utils\Database\QueryBuilder;


class HomeController
{


    public function home()
    {

        $data = [
          'title' => "test title"
        ];

        require_once DOCUMENT_ROOT . '/app/views/main.php';



    }

}