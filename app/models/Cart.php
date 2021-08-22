<?php
require_once 'Model.php';

class Cart extends Model
{
    public $total_price = 0;
    public $total_amount = 0;

    /**
     * コンストラクタ
     */
    function __construct($params = null)
    {
        parent::__construct($params);
    }

    /**
     * カート商品一覧を取得
     * オーバーライド
     */
    function all()
    {
        if (isset($_SESSION[APP_NAME]['cart'])) {
            $values = $_SESSION[APP_NAME]['cart'];
            foreach ($values as $item_id => $amount) {
                $item = new Item();
                $item->find($item_id);
                $value['item'] = $item->value;
                $value['item_id'] = $item_id;
                $value['amount'] = $amount;
                $this->values[] = $value;

                //トータル個数
                $this->total_amount += $amount;

                //トータル金額
                $this->total_price += $item->value['price'] * $amount;
            }
        }
    }

    /**
     * カート追加
     * 
     * @param int $item_id
     */
    function add($item_id)
    {
        if (isset($item_id)) {
            $_SESSION[APP_NAME]['cart'][$item_id]++;
        }
    }


    /**
     * カート減らす
     * 
     * @param int $item_id
     */
    function reduce($item_id)
    {
        if (isset($_SESSION[APP_NAME]['cart'][$item_id])) {
            $amount = $_SESSION[APP_NAME]['cart'][$item_id];
            if ($amount > 1) {
                $_SESSION[APP_NAME]['cart'][$item_id]--;
            }
        }
    }


    /**
     * カート削除
     * 
     * @param int $item_id
     */
    function clear($item_id)
    {
        if (isset($_SESSION[APP_NAME]['cart'][$item_id])) {
            unset($_SESSION[APP_NAME]['cart'][$item_id]);
        }
    }

    /**
     * カート個数更新
     * 
     * @param int $item_id
     * @param int $amount
     */
    function update($item_id, $amount)
    {
        if ($amount > 0) {
            $_SESSION[APP_NAME]['cart'][$item_id] = $amount;
        }
    }

    /**
     * カート一括更新
     * 
     * @param array $values
     */
    function updates($values)
    {
        foreach ($values as $item_id => $amount) {
            $this->update($item_id, $amount);
        }
    }

    /**
     * カート全削除
     * 
     */
    function clearAll()
    {
        if (isset($_SESSION[APP_NAME]['cart'])) {
            unset($_SESSION[APP_NAME]['cart']);
        }
    }

    /**
     * 購入処理
     */
    function purchase($user)
    {
        if (!$user->value['id']) return;

        $path = DATA_DIR . 'purchase.csv';
        $this->all();
        if (!$this->values) return;
        foreach ($this->values as $value) {
            $item = new Item();
            $item->find($value['item']['id']);

            $data['user_id'] = $user->value['id'];
            $data['item_id'] = $item->value['id'];
            $data['amount'] = $value['amount'];
            $data['price'] = $item->value['price'];
            $data['total_price'] = $item->value['price'] * $value['amount'];
            $data['created_at'] = date('Y/m/d H:i:s');

            $this->saveCsv($data, $path);
        }
        $this->clearAll();
        return true;
    }
}
