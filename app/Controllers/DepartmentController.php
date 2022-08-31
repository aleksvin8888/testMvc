<?php

namespace App\Controllers;


use App\Models\DepartmentModel;
use JRCologne\Utils\Database\DB;
use JRCologne\Utils\Database\QueryBuilder;


class DepartmentController
{


    public function index()
    {

        $departments = new DepartmentModel();
        $departments = $departments->getAll();

        require_once DOCUMENT_ROOT . '/app/views/department/index.php';

    }

    public function show()
    {


        require_once DOCUMENT_ROOT . '/app/views/department/show.php';
    }

}