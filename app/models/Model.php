<?php

class Model
{
    public $values;
    public $value;
    public $csv_file;

    function __construct()
    {
    }

    /**
     * データ一覧を取得
     * 
     * @return
     */
    function loadCsv()
    {
        $file_path = DATA_DIR . $this->csv_file;
        if (!file_exists($file_path)) {
            echo "{$file_path} がみつかりません";
            exit;
        }
        if ($handle = fopen($file_path, 'r')) {
            //ヘッダ読み込み（カラム）
            $columns = fgetcsv($handle, FILE_BUFFER);

            //データ読み込み
            while ($row = fgetcsv($handle, FILE_BUFFER)) {
                //連想配列データ作成
                foreach ($columns as $index => $column) {
                    $value[$column] = $row[$index];
                }
                //多次元連想配列作成
                $this->values[] = $value;
            }
            fclose($handle);
        }
    }

    /**
     * CSVデータ更新
     * 
     * @return array
     */
    function saveCsv($data, $path)
    {
        //初回作成＆ヘッダー追加
        if (!file_exists($path)) {
            if ($handle = fopen($path, 'w+')) {
                $columns = array_keys($data);
                fputcsv($handle, $columns);
                fclose($handle);
            }
        }
        //CSVデータ追記
        if ($handle = fopen($path, 'a')) {
            fputcsv($handle, $data);
            fclose($handle);
        }
    }

    /**
     * データ一覧を取得
     * 
     * @return
     */
    function all()
    {
        if ($this->csv_file) {
            $this->loadCsv();
        }
    }

    /**
     * id からデータ取得
     * 
     * @param int $id
     * @return array
     */
    function find($id)
    {
        $this->all();
        if (!$this->values) return;
        foreach ($this->values as $value) {
            if ($value['id'] == $id) {
                $this->value = $value;
                return $value;
            }
        }
    }

    /**
     * データ一覧を取得
     * 
     * @return
     */
    function randomList($count = 3)
    {
        $this->all();
        $keys = array_rand($this->values, $count);
        foreach ($keys as $key) {
            $values[] = $this->values[$key];
        }
        $this->values = $values;
    }

}
