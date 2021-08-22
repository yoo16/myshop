<!DOCTYPE html>
<html lang="ja">

<?php include('app/views/components/head.php') ?>

<body>
    <?php include('app/views/components/nav.php') ?>

    <div class="container">
        <?php if (!$this->cart->values) : ?>
            <p class="alert alert-info">商品カートが空です</p>
            <p>
                <a class="btn btn-outline-primary" href="<?= BASE_URL ?>item/">商品一覧</a>
            </p>
        <?php else : ?>
            <form class="form-inline" action="updates.php" method="post">
                <h2 class="h2 mt-3 mb-3">ショッピングカート</h2>
                <?php if ($this->cart->values) : ?>
                    <?php foreach ($this->cart->values as $cart) :  ?>
                        <div class="row mt-1">
                            <div class="col-3">
                                <img class="" src="<?= BASE_URL ?>images/now_printing.png" width="100">
                            </div>
                            <div class="col-5">
                                <p><?= $cart['item']['name'] ?></p>
                                <p>¥<?= $cart['item']['price'] ?></p>
                            </div>
                            <div class="col-2">
                                <input class="text-end form-control" type="number" name="amounts[<?= $cart['item']['id'] ?>]" value="<?= $cart['amount'] ?>" min="0">
                            </div>
                            <div class="col-2 text-end">
                                <a class="btn btn-sm btn-danger" href="clear.php?item_id=<?= $cart['item']['id'] ?>">削除</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <div class="text-end mt-1 fw-bold">
                        <label for="">小計：</label>
                        ¥<?= $this->cart->total_price ?>
                    </div>
                    <div class="text-end mt-3">
                        <button class="btn btn-sm btn-outline-primary">更新</button>
                        <a href="confirm.php" class="btn btn-sm btn-primary">レジに進む</a>
                    </div>
                <?php endif ?>
            </form>
        <?php endif ?>
    </div>
</body>

</html>