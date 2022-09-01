<?php

namespace App\Models;

class UserModel extends BaseModel
{


    public function getAll()
    {
        $data = $this->conn()->get('users');
        return $data;
    }

    public function getWithDepartment()
    {
        $data = $this->conn()->rawQuery('SELECT * from users 
                                LEFT JOIN departments ON users.department_id = departments.id');
        return $data;
    }

    public function getUser($id)
    {
        $data = $this->conn()->rawQuery('SELECT * from users 
                        LEFT JOIN departments ON users.department_id = departments.id
                        where users.id = '. $id );

        return $data;
    }

    public function create($data)
    {
        $user = $this->conn()->insert ('users', $data);

        if($user) {
            $data = 'user was created. Id= ' . $user;
        } else {
            $data = 'Erorr  on creete';
        }

        return $data;
    }


}