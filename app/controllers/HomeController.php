<?php
class HomeController
{
    public function index()
    {
        //商品取得
        $item = new Item();
        $item->all();

        //お知らせ取得
        $information = new Information();
        $information->all();
        rsort($information->values);

        //アクセスカウンタ
        $access_count = $this->updateAccessCount();

        include VIEWS_DIR.'home/index.view.php';
    }

    /**
     * アクセスカウンタの更新
     */
    function updateAccessCount()
    {
        $path = DATA_DIR . 'count.txt';
        if (!file_exists($path)) {
            //ファイルがなければ作成し、0を書き込む
            chmod($path, 0666);
            file_put_contents($path, 0, LOCK_EX);
        }
        $count = file_get_contents($path, LOCK_EX);
        $count++;
        file_put_contents($path, $count, LOCK_EX);
        return $count;
    }
}
