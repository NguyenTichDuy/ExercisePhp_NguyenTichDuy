<?php
class ShopingController
{
    private $models = [];
    private $views = [];

    public function __construct()
    {
        $this->models['category'] = isset($this->models['category']) ? $this->models['category'] : new CategoryModel();
        $this->models['cartitems'] = isset($this->models['cartitems']) ? $this->models['cartitems'] : new CartItemModel();

        $this->views['sidebar'] = isset($this->views['sidebar']) ? $this->views['sidebar'] :new SidebarShopView();
        $this->views['content'] = isset($this->views['content']) ? $this->views['content'] :new ContentShopView();
    }
    public function loadViews()
    {
        require_once(LAYOUT_PATH . "header.php");

        echo "<div class='content'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-3'>";
                            $this->views['sidebar']->render($this->models['category']->getAll('Category'));
                        echo '</div>';
                        echo "<div class='col-lg-9'>";
                            $this->views['content']->render($this->models['cartitems']->getAllItems());
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';

        require_once(LAYOUT_PATH . "footer.php");
    }
}
