<?php

namespace App\Controllers;


use App\Models\DepartmentModel;


class DepartmentController
{


    public function index()
    {

        $department = new DepartmentModel();
        $departments = $department->getAll();

        require_once DOCUMENT_ROOT . '/app/views/department/index.php';

    }

    public function show()
    {

        require_once DOCUMENT_ROOT . '/app/views/department/show.php';
    }

}