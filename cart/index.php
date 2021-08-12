<?php
require_once('../setting.php');
require_once('app.php');
require_once('app/controllers/CartController.php');

<<<<<<< HEAD
$controller = new CartController();
$controller->index();
=======
if (!$user->isLogined()) {
    header('Location: ../index.php');
}

$cart = new Cart();
$cart->all();
$cart->calculate();
?>
<!DOCTYPE html>
<html lang="ja">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>

    <div class="container">
        <h2 class="h2 mt-3 mb-3">カート</h2>

        <?php if (!$cart->values) : ?>
            <p class="alert alert-info">商品カートが空です</p>
            <p>
                <a class="btn btn-outline-primary" href="/myshop/item/index.php">商品一覧へ</a>
            </p>
        <?php else : ?>
            <form action="purchase.php" method="post">
                <div>
                    <a href="clear_all.php" class="btn btn-danger">全て削除</a>
                </div>

                <table class="table">
                    <tr>
                        <th>商品名</th>
                        <th>価格</th>
                        <th>個数</th>
                        <th></th>
                    </tr>
                    <?php foreach ($cart->values as $value) :  ?>
                        <tr>
                            <td><?= $value['item']['name'] ?></td>
                            <td class="text-right"><?= $value['item']['price'] ?>円</td>
                            <td class="text-right"><?= $value['amount'] ?> 個</td>
                            <td>
                                <a class="btn btn-sm btn-outline-primary" href="reduce.php?item_id=<?= $value['item']['id'] ?>">-</a>
                                <a class="btn btn-sm btn-outline-primary" href="add.php?item_id=<?= $value['item']['id'] ?>">+</a>
                                <a class="btn btn-sm btn-danger" href="clear.php?item_id=<?= $value['item']['id'] ?>">削除</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <th>合計金額</th>
                        <th class="text-right"><?= $cart->total_price ?>円</th>
                    </tr>
                </table>
                <div class="text-center">
                    <button class="btn btn-primary">購入</button>
                    <a href="/myshop/item/" class="btn btn-outline-primary">買い物を続ける</a>
                </div>
            </form>
        <?php endif ?>
    </div>
</body>

</html>
>>>>>>> cb5701d6e9eceeb91af0234fef9719d149f4e131
