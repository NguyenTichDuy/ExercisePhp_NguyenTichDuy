<?php
class CartItemModel extends Model {

    private const qrCartProduct = "SELECT id, size, quality, price, name, image 
        FROM CartItems inner join Product 
        on CartItems.idProduct = Product.idProduct;";

    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    public function getAllItems()
    {
        $allData = ConnectDatabase::getConnection()->query(self::qrCartProduct);
        $data = [];
        foreach($allData as $row){
            array_push($data, $row);
        };
        return $data;
    }
}