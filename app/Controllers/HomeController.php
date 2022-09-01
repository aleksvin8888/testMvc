<?php

namespace App\Controllers;



use App\Models\DepartmentModel;

class HomeController
{


    public function home()
    {

        $department = new DepartmentModel();
        $departments = $department->getAll();

        require_once DOCUMENT_ROOT . '/app/views/main.php';



    }

}