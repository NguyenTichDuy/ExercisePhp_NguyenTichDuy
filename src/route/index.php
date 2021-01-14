<?php
// Add base route (startpage)
Route::add('/', function () {
    $home = new HomeController();
});

// Simple test route that simulates static html file
Route::add('/shop', function () {
    $shoping = new ShopingController();
});

Route::run('/');
