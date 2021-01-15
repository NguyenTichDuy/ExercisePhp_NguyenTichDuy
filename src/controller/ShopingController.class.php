<?php
class ShopingController {
    private $models;
    private $views;

    public function __construct()
    {
        define('SHOP_PATH', VIEW_PATH . 'shop' . DS);
        
        $this->models = isset($this->models) ? $this->models : new CategoryModel();
        
    }
    public function loadViews(){
        $this->models->showAll();
        require_once(LAYOUT_PATH . "header.php");
        require_once(SHOP_PATH . 'index.php');
        require_once(LAYOUT_PATH . "footer.php");
    }
}