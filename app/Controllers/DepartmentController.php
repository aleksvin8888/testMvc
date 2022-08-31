<?php

namespace App\Controllers;


use JRCologne\Utils\Database\DB;
use JRCologne\Utils\Database\QueryBuilder;


class DepartmentController
{


    public function index()
    {

        $data = [
          'title' => "test title"
        ];

        require_once DOCUMENT_ROOT . '/app/views/department/index.php';

    }

    public function show()
    {


        require_once DOCUMENT_ROOT . '/app/views/department/show.php';
    }

}