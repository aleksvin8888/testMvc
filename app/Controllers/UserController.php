<?php

namespace App\Controllers;


use App\Models\DepartmentModel;
use App\Models\UserModel;
use http\Client\Request;


class UserController
{


    public function index()
    {
        $user = new UserModel();
        $users = $user->getWithDepartment();

        require_once DOCUMENT_ROOT . '/app/views/user/index.php';

    }

    public function show($id)
    {
        $user = new UserModel();
        $user = $user->getUser($id);

        require_once DOCUMENT_ROOT . '/app/views/user/show.php';
    }

    public function store()
    {
        if(isset($_POST)  ) {
            if(!empty($_POST['email'])  and !empty($_POST['first_name'])
                and !empty($_POST['address'])  and !empty($_POST['phone'])
                and !empty($_POST['comment']) and !empty($_POST['department_id'])) {

                $user = new UserModel();
                $user = $user->create($_POST);

            } else {
                $user = "Помилка усі поля обовязкові до заповнення";
            } // end if empty
        } // end if isset

        echo $user;

        $department = new DepartmentModel();
        $departments = $department->getAll();

        require_once DOCUMENT_ROOT . '/app/views/main.php';

    }


}