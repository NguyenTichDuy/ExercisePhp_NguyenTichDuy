<?php
class ConnectDatabase {

    protected static $connection;

    public static function getConnection()
    {
        $db_connect = getenv('DB_CONNECTION');
        $host = getenv('DB_HOST');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');
        $database = getenv('DB_DATABASE');
        try {
            self::$connection = !empty(self::$connection) ? self::$connection :
                new PDO(
                    "$db_connect:host=$host;dbname=$database",
                    $username,
                    $password,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
        } catch (PDOException $e) {
            //throw $th;
            echo $e->getMessage();
        }
        return self::$connection;
    }
}