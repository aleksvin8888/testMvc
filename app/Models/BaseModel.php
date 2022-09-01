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
            echo 'Помилка підключення до бази даних<br>';
        } else {
            return $conn;
        }
    }

}