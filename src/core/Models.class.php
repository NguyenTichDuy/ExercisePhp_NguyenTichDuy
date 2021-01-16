<?php
class Model
{
    public function getAll(string $tableName)
    {
        $allData = ConnectDatabase::getConnection()->query("SELECT * FROM $tableName");
        $data = [];
        foreach($allData as $row){
            array_push($data, $row);
        };
        return $data;
    }
}