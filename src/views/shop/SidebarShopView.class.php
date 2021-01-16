<?php
class SidebarShopView extends View
{
    public function __construct()
    {
        
    }

    public function render()
    {
        $list = func_get_args()[0];
        echo "<h1 class='my-4'>Shopuu</h1>
          <div class='list-group'>";
        foreach ($list as $key => $value) {
            echo "<a href='http://localhost:8080/shop/" . $value['idCategory'] . "' class='list-group-item'>" . $value['title'] . "</a>";
        }
        echo "</div>";
    }
}
