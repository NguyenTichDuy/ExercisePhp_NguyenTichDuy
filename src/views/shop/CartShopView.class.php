<?php
class CartShopView extends View
{
    public function render()
    {
        $param = func_get_args();
        $list = $param[0];
        echo "<div class='row'>";
        foreach ($list as $key => $value) {
            echo  "<div class='col-lg-4 col-md-6 mb-4'>
                        <div class='card h-100'>
                            <a href='#'><img class='card-img-top' src='./public/images/" . $value['image'] . "' alt=''></a>
                            <div class='card-body'>
                                <h4 class='card-title'>
                                <a href='#'>". $value['name'] . "</a>
                                </h4>
                                <p>Quality: " . $value['quality'] . "</p>
                                <p class='card-text'>Size: " . $value['size'] ."</p>
                            </div>
                            <div class='card-footer'>
                                <h5>Price: " .  $value['price'] . " VND</h5>
                            </div>
                        </div>
                    </div>
                    ";
        }
        echo "</div>";
    }
}
