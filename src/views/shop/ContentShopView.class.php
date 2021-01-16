<?php
class ContentShopView extends View {
    private $cart;
    public function __construct()
    {
        $this->cart = isset($this->cart) ? $this->cart : new CartShopView();
    }
    public function render()
    {
        $param = func_get_args();
        $this->cart->render($param[0]);
    }
}