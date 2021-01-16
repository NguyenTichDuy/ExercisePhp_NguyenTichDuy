<?php
class DetailCartShopView extends View {
    public function __construct()
    {
    }
    public function render()
    {
        $param = func_get_args();
        $key = explode("/",$_SERVER['REQUEST_URI']);
        $data = $param[0][$key[2] - 1];
        echo "<div class='col-md-6 mb-4 mb-md-0'>
                    <div class='mdb-lightbox'>
                        <div class='row product-gallery mx-1'>
                            <div class='col-12 mb-0'></div>
                            <figure class='view overlay rounded z-depth-1 main-img'>
                            <a href='/public/images/" . $data['image'] ."'
                                data-size='710x823'
                                class='img-fluid z-depth-1'>
                                <img src='/public/images/" . $data['image'] ."'/>
                            </a
                            </figure>
                        </div>
                    </div>
            </div>
            <div class='col-md-6'>
                    <h5>" . $data['name'] . "</h5>
                    <p class='mb-2 text-muted text-uppercase small'>Shirts</p>
                    <p><span class='mr-1'><strong>". $data['price'] . " VND</strong></span></p>
                    <p class='pt-1'> noi dung.</p>
                    <div class='table-responsive'>
                        <table class='table table-sm table-borderless mb-0'>
                        <tbody>
                            <tr>
                            <th class='pl-0 w-25' scope='row'><strong>Color</strong></th>
                            <td>" . $data['color'] ."</td>
                            </tr>
                            <tr>
                        </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class='table-responsive mb-2'>
                        <table class='table table-sm table-borderless'>
                        <tbody>
                            <tr>
                            <td class='pl-0 pb-0 w-25'>Quantity</td>
                            <td class='pb-0'>Select size</td>
                            </tr>
                            <tr>
                            <td class='pl-0'>
                                <div>" . $data['quality'] . "</div>
                            </td>
                            <td>
                                <div class='mt-1'>
                                <div class='form-check form-check-inline pl-0'>
                                    <input type='radio' class='form-check-input' id='small' name='materialExampleRadios'
                                    checked>
                                    <label class='form-check-label small text-uppercase card-link-secondary'
                                    for='small'>". $data['size'] . "</label>
                                </div>
                                
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <button type='button' class='btn btn-primary btn-md mr-1 mb-2'>Buy now</button>
                    <button type='button' class='btn btn-light btn-md mr-1 mb-2'><i
                        class='fas fa-shopping-cart pr-2'></i>Add to cart</button>
                    </div>";
    }
}