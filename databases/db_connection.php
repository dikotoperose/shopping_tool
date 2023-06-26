<?php
class Database
{

    public function getConnection()
    {

        try {
            $dsn = 'mysql:dbname=shopping_tool;host=localhost';
            $user = 'root';
            $password = '';

            $dbh = new PDO($dsn, $user, $password);
     
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $dbh;
    }
}