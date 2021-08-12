<?php
require_once 'Model.php';

class Information extends Model
{
    public $values;
    public $value;
    public $csv_file = 'informations.csv';

    /**
     * コンストラクタ
     */
    function __construct($params = null)
    {
        parent::__construct($params);
    }

    function sort()
    {
        rsort($this->values);
    }

}
