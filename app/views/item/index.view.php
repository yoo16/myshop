<!DOCTYPE html>
<html lang="ja">

<?php include('app/views/components/head.php') ?>

<body>
    <?php include('app/views/components/user_nav.php') ?>
    <div class="container">
        <div class="row">
            <?php foreach ($item->values as $value) :  ?>
                <div class="card col-lg-3 col-md-4 border-0">
                    <div class="card-header p-0">
                    <img src="../images/now_printing.png" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['name'] ?></h5>
                        <p class="card-text"><?= $value['price'] ?>円</p>
                        <p class="text-center">
                            <a href="../cart/add.php?item_id=<?= $value['id'] ?>" class="btn btn-primary">カートに入れる</a>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>