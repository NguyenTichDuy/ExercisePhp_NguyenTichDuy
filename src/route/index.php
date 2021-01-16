<?php
// Add base route (startpage)
define("LAYOUT_PATH", VIEW_PATH . 'layout' . DS);

Route::add('/', function () {
    $home = new HomeController();
    // $home->loadViews();
});

Route::add('/shop', function () {
    $shoping = new ShopingController();
    $shoping->loadViews();
});
Route::add('/shop/([0-9]*)', function () {
    $detailCart = new DetailCartShopController();
    $detailCart->loadViews();
});
Route::run('/');
