<?php
require_once 'Model.php';

class User extends Model
{
    public $csv_file = 'users.csv';
    public $value = [
        'name' => '',
        'email' => '',
        'password' => '',
    ];

    function __construct()
    {
        parent::__construct();
    }

     /**
     * 認証ユーザ
     * 
     * @return bool
     */
    function authUser()
    {
        if (isset($_SESSION[APP_NAME]['user'])) {
            $this->value = $_SESSION[APP_NAME]['user'];
        }
    }


    /**
     * ログイン済みチェック
     * 
     * @return bool
     */
    function isLogined()
    {
        //user セッション判別
        $this->authUser();
        return ($this->value['id']);
    }

    /**
     * ログイン認証
     * 
     * @param string $item_id
     * @param string $password
     * @return void
     */
    function auth($email, $password)
    {
        $value = $this->findByEmail($email);
        if (!$value) return;
        //ログイン名チェック
        if ($value['email'] == $email) {
            //ハッシュパスワードチェック
            if (password_verify($password, $value['password'])) {
                //user セッション登録、データ設定
                $_SESSION[APP_NAME]['user'] = $this->value = $value;
            }
        }
    }

    /**
     * ログアウト
     * 
     * @return array
     */
    function logout()
    {
        //セッション削除
        unset($_SESSION[APP_NAME]['user']);
    }

    /**
     * ユーザ検索(email)
     * 
     * @param string $email
     * @return array
     */
    function findByEmail($email)
    {
        $this->all();
        if (!$this->values) return;
        //email で配列作成
        $emails = array_column($this->values, 'email');

        //email の index 検索
        $index = array_search($email, $emails);

        //指定 index のデータを返す
        return $this->values[$index];
    }

}
