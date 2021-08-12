<!DOCTYPE html>
<html lang="ja">

<?php include('app/views/components/head.php') ?>

<body>
    <?php include('app/views/components/nav.php') ?>
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

            <!-- アクセス -->
            <div class="col-4">
                <h3 class="h3">アクセス合計</h3>
                <p>
                    <?= $access_count ?>回
                </p>
            </div>
        </div>

        <div class="item mt-5">
            <h3 class="h3">ピックアップ商品</h3>
            <div class="container">
                <div class="row">
                    <?php for ($i = 1; $i <= 3; $i++) :  ?>
                        <div class="card col-4 pl-0 pr-0">
                            <img src="images/now_printing.png" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item->values[$i]['name'] ?></h5>
                                <p class="card-text text-right"><?= $item->values[$i]['price'] ?>円</p>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>