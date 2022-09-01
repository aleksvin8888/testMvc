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

        if($this->conn()->where("email", $data['email'])->getOne("users")) {
            $data = 'Помилка користувач з вказаним email вже існує';
        } else {
            $user = $this->conn()->insert ('users', $data);

            if($user) {
                $data = 'Користувач. Id= ' . $user . 'створено успішно';
            } else {
                $data = 'Помилка при збереженні';
            }
        }


        return $data;
    }


}