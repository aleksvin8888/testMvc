<?php

namespace App\Models;

use JRCologne\Utils\Database\DB;
use JRCologne\Utils\Database\QueryBuilder;


class BaseModel
{
    public function conn()
    {
        include DOCUMENT_ROOT . '/config/config_db.php';

        $conn = new DB(new QueryBuilder);

        if (!$conn->connect($db['dsn'], $db['user'], $db['pass'])) {
            echo 'Connection to database failed!<br>';

            $e = $conn->getPDOException();

            if ($e) {
                echo '<pre>', print_r($e), '</pre>';
            }
        } else {
            echo 'Successfully connected to database!<br>';
            return $conn;
        }
    }

}