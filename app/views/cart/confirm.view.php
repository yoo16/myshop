<!DOCTYPE html>
<html lang="ja">

<?php include('app/views/components/head.php') ?>

<body>
    <?php include('app/views/components/nav.php') ?>

    <div class="container">
        <form class="form-inline" action="purchase.php" method="post">
            <h2 class="h2 mt-3 mb-3">注文</h2>
            <?php if ($this->cart->values) : ?>
                <?php foreach ($this->cart->values as $cart) :  ?>
                    <div class="row mt-1">
                        <div class="col">
                            <p><?= $cart['item']['name'] ?></p>
                        </div>
                        <div class="col-2">
                            <p>¥<?= $cart['item']['price'] ?></p>
                        </div>
                        <div class="col-2">
                            <?= $cart['amount'] ?>個
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="text-end mt-1 fw-bold">
                    <label for="">小計：</label>
                    ¥<?= $this->cart->total_price ?>
                </div>
                <div class="text-end mt-3">
                    <a href="index.php" class="btn btn-sm btn-outline-primary">戻る</a>
                    <button class="btn btn-sm btn-primary">注文確定</button>
                </div>
            <?php endif ?>
        </form>
    </div>
</body>

</html>