<?php

namespace App\Models;



use MysqliDb;

class BaseModel
{
    public function conn()
    {
        include DOCUMENT_ROOT . '/config/config_db.php';

        $conn = new MysqliDb ($db['host'], $db['user'], $db['pass'], $db['dbname']);

        if (!$conn) {
            echo 'Connection to database failed!<br>';

        } else {
            echo 'Successfully connected to database!<br>';
            return $conn;
        }
    }

}