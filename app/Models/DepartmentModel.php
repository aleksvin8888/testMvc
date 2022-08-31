<?php

namespace App\Models;


class DepartmentModel extends BaseModel
{
    protected $id;
    protected $title;



    // GET METHODS

    public function getAll()
    {
        $data = $this->conn()->get('departments');

        return $data;

    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }


    public function read(int $id)
    {
        $this->title = 'My first Product';

        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }



}