<?php
// Add base route (startpage)
define("LAYOUT_PATH", VIEW_PATH . 'layout' . DS);

Route::add('/', function () {
    $home = new HomeController();
});

Route::add('/shop', function () {
    $shoping = new ShopingController();
    $shoping->loadViews();
});
Route::run('/');
