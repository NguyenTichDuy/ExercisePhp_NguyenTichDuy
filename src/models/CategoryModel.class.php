<?php
class CategoryModel
{
    private $connection;

    public function __construct()
    {
        $db_connect = getenv('DB_CONNECTION');
        $host = getenv('DB_HOST');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');
        $database = getenv('DB_DATABASE');
        try {
            $this->connection = !empty($this->connection) ? $this->connection :
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
    }
    public function showAll()
    {
        foreach ($this->connection->query('SELECT * FROM Category') as $row) {
            // print_r(utf8_encode($row));
            print_r(utf8_decode($row['title']));
        }
    }
}
