<?php
require_once 'Controller.php';
class LoginController extends Controller
{
    public function index()
    {
        $user = new User();
        include 'app/views/login/index.view.php';
    }

    public function auth()
    {
        if (!$_SERVER['REQUEST_METHOD'] == 'POST') return;
        $user = new User();
        $user->auth($_POST['email'], $_POST['password']);
        if ($user->value['id']) {
            $this->redirect('../item/index.php');
        } else {
            $this->redirect('./');
        }
    }

    public function logout()
    {
        $user = new User();
        $user->logout();

        $cart = new Cart();
        $cart->clearAll();

        $this->redirect('../');
    }
}
