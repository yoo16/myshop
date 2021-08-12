<?php
class CartController
{
    public function index()
    {
        $user = new User();
        if (!$user->isLogined()) {
            header('Location: ../index.php');
        }

        $item = new Item();
        $items = $item->pluckByID();

        $cart = new Cart();
        $cart->all();
        include 'app/views/cart/index.view.php';
    }

    public function add()
    {
        if (isset($_GET['item_id'])) {
            $cart = new Cart();
            $cart->add($_GET['item_id']);
        }
        header("Location: index.php");
    }

    public function updates()
    {
        if (isset($_POST)) {
            $cart = new Cart();
            $cart->updates($_POST['amounts']);
        }
        header("Location: index.php");
    }

    public function clear()
    {
        if (isset($_GET['item_id'])) {
            $cart = new Cart();
            $cart->clear($_GET['item_id']);
        }
        header("Location: index.php");
    }
}
