<?php
require_once 'Controller.php';
class ItemController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $item = new Item();
        $item->all();

        include 'app/views/item/index.view.php';
    }
}
