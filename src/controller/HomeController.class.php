<?php
class HomeController {
    private $models = [];
    private $views = [];

    public function __construct()
    {
        $this->models = isset($this->models) ? $this->models : new CategoryModel();
    }
}