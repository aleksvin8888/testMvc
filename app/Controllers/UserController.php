<?php

namespace App\Controllers;


use App\Models\UserModel;


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


}