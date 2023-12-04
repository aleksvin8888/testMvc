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

    public function create()
    {

        require_once DOCUMENT_ROOT . '/app/views/department/create.php';
    }

    public function store()
    {
        if(isset($_POST)){
            if(!empty($_POST['title'])) {



                $department = new DepartmentModel();
                $data = $department->create($_POST);

            } else {
                $data = "Поле не може бути порожнім";
            }

        }

        $department = new DepartmentModel();
        $departments = $department->getAll();
        echo $data;

        require_once DOCUMENT_ROOT . '/app/views/department/index.php';
    }


    public function delete($id)
    {

        $department = new DepartmentModel();
        $data = $department->delete($id);
        echo $data;

        $department = new DepartmentModel();
        $departments = $department->getAll();

        require_once DOCUMENT_ROOT . '/app/views/department/index.php';

    }


}
