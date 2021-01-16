<?php
class DetailCartShopController {
    private $models = [];
    private $views = [];

    public function __construct()
    {
        $this->models['cartItem'] = isset($this->models['cartItem']) ? $this->models['cartItem'] :new DetailCartItemModel();
        $this->views['detailCart'] = isset($this->views['detailCart']) ? $this->views['detailCart'] :new DetailCartShopView();
    }
    public function loadViews()
    {
        echo 
        require_once(LAYOUT_PATH . "header.php");

        echo "<div class='content' style='margin-top: 4rem'>
                <div class='container'>
                    <div class='row'>";
        echo            $this->views['detailCart']->render($this->models['cartItem']->getAllItems());   
        echo        "</div>
                 </div>
            </div>";

        require_once(LAYOUT_PATH . "footer.php");
    }
}