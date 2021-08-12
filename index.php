<?php
require_once('setting.php');
require_once('app.php');
require_once('app/controllers/HomeController.php');

<<<<<<< HEAD
$controller = new HomeController();
$controller->index();
=======
//商品取得
$item = new Item();
$item->randomList();

//お知らせ取得
$information = new Information();
$information->all();
$information->sort();
?>

<!DOCTYPE html>
<html lang="ja">

<?php include(COMPONENTS_DIR.'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR.'nav.php') ?>

    <div class="container">
        <div class="row mt-5">
            <!-- おしらせ -->
            <div class="col-8">
                <h3 class="h3">お知らせ</h3>
                <ul class="list-group">
                    <?php foreach ($information->values as $value) :  ?>
                        <li class="list-group-item">
                            <?= date('Y/m/d', strtotime($value['posted_at'])) ?>
                            <?= $value['title'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>

        <div class="item mt-5">
            <h3 class="h3">ピックアップ商品</h3>
            <div class="container">
                <div class="row">
                    <?php foreach ($item->values as $value) :  ?>
                        <div class="card col-4 pl-0 pr-0">
                            <img src="images/now_printing.png" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $value['name'] ?></h5>
                                <p class="card-text text-right"><?= $value['price'] ?>円</p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
>>>>>>> cb5701d6e9eceeb91af0234fef9719d149f4e131
