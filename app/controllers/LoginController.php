<?php
class LoginController
{
    /**
     * ログイン処理
     */
    public function index()
    {
        $user = new User();
        include VIEWS_DIR . 'login/index.view.php';
    }

    public function auth()
    {
        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user->login($_POST['email'], $_POST['password']);
            if ($user->isLogined()) {
                header('Location: ../item/index.php');
                exit;
            }
        }
        header('Location: ./');
    }

    public function logout()
    {
        $user = new User();
        $user->logout();
        
        $cart = new Cart();
        $cart->clearAll();
        
        header('Location: login/');
    }
}
