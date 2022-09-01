<?php

namespace App\Models;


class DepartmentModel extends BaseModel
{


    public function getAll()
    {
        $data = $this->conn()->get('departments');

        return $data;

    }

    public function create($data)
    {

        $department = $this->conn()->where("title", $data['title'])->getOne("departments");

        if($department) {
            $data = "Департамент з такою назвою вже існує ";
        } else {

            if($this->conn()->insert('departments', $data)) {
                $data = "Департамент створено успішно";
            }
        }

        return $data;
    }

    public function delete($id)
    {

        if(  $this->conn()->where('id', $id)->delete('departments')   ) {
            $data = 'Департамент видалено успішно';
        }

        return $data;
    }


}