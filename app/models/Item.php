<?php
require_once 'Model.php';

class Item extends Model
{
    public $values;
    public $value;
    public $csv_file = 'items.csv';

    /**
     * コンストラクタ
     */
    function __construct($params = null)
    {
        parent::__construct($params);
    }

    /**
     * 商品データの読み込み
     * 
     * @return array
     */
    function loadData()
    {
        // $this->values = [
        //     ['id' => 1, 'name' => 'ミネラルウォーター', 'price' => 80],
        //     ['id' => 2, 'name' => 'コーヒー', 'price' => 130],
        //     ['id' => 3, 'name' => '紅茶', 'price' => 130],
        //     ['id' => 4, 'name' => '炭酸水', 'price' => 90],
        //     ['id' => 5, 'name' => 'ほうじ茶', 'price' => 110],
        // ];
    }

}
