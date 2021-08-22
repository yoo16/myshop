<?php
require_once 'Controller.php';
class CartController extends Controller
{
    public $cart;
    public $user;

    function __construct()
    {
        parent::__construct();

        if (!$this->user->value['id']) {
            $this->redirect(BASE_URL);
        }
    }

    public function index()
    {
        include 'app/views/cart/index.view.php';
    }

    public function confirm()
    {
        include 'app/views/cart/confirm.view.php';
    }

    public function add()
    {
        if (isset($_GET['item_id'])) {
            $cart = new Cart();
            $cart->add($_GET['item_id']);
        }
        $this->redirect('index.php');
    }

    public function updates()
    {
        if (isset($_POST['amounts'])) {
            $cart = new Cart();
            $cart->updates($_POST['amounts']);
        }
        $this->redirect('index.php');
    }

    public function clear()
    {
        if (isset($_GET['item_id'])) {
            $cart = new Cart();
            $cart->clear($_GET['item_id']);
        }
        $this->redirect('index.php');
    }

    public function purchase()
    {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') return;
        $cart = new Cart();

        $_SESSION[APP_NAME]['is_success'] = $cart->purchase($this->user);
        $this->redirect('result.php');
    }

    public function result()
    {
        if (empty($_SESSION[APP_NAME]['is_success'])) {
            $this->redirect('../');
        } else {
            unset($_SESSION[APP_NAME]['is_success']);
            include 'app/views/cart/result.view.php';
        }
    }
}
