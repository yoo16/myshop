<!DOCTYPE html>
<html lang="ja">

<?php include('app/views/components/head.php') ?>

<body>
    <?php include('app/views/components/nav.php') ?>
    <div class="container">
        <div class="row mt-5">
            <!-- おしらせ -->
            <div class="col-12">
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
            <h3 class="h3 mt-3 mb-3">ピックアップ商品</h3>
            <div class="container">
                <div class="row">
                    <?php foreach ($item->values as $value) :  ?>
                        <div class="card col-lg-3 col-md-4 border-0">
                            <img src="images/now_printing.png" alt="">
                            <div class="card-body">
                                <p class="fw-bold"><?= $value['name'] ?></p>
                                <p class="text-end"><?= $value['price'] ?>円</p>
                                <p class="text-center">
                                    <a href="<?= BASE_URL ?>cart/add.php?item_id=<?= $value['id'] ?>" class="btn btn-sm btn-primary">カートに入れる</a>
                                </p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <!-- アクセス -->
        <div class="text-end">
            <label>アクセス合計：</label>
            <?= $access_count ?>回
        </div>
    </div>
</body>

</html>