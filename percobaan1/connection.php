<?php

require_once 'config.php';

class connection
{
    public static function make($host,$db,$user,$password)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        try {
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
            return new PDO($dsn, $user, $password, $option);
    }   catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
return Connection::make($host, $db, $user, $password);