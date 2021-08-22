<?php
class Controller
{
    public $cart;
    public $user;

    function __construct()
    {
        $this->user = new User();
        $this->user->authUser();

        $this->cart = new Cart();
        $this->cart->all();
    }
    
    function redirect($url)
    {
        header("Location: {$url}");
        exit;
    }

}
