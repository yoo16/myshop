<?php
class ItemController
{
    public function index()
    {
        $user = new User();
        if (!$user->isLogined()) {
            header('Location: ../index.php');
        }

        $item = new Item();
        $item->all();

        include 'app/views/item/index.view.php';
    }
}
