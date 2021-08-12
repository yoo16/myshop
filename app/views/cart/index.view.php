<!DOCTYPE html>
<html lang="ja">

<?php include('app/views/components/head.php') ?>

<body>
    <?php include('app/views/components/user_nav.php') ?>

    <div class="container">
        <?php if (!$cart->values) : ?>
            <p>商品カートが空です</p>
            <p>
                <a href="../index.php">商品一覧へ</a>
            </p>
        <?php else : ?>
            <form class="form-inline" action="updates.php" method="post">
                <table class="table">
                    <tr>
                        <th>商品名</th>
                        <th>価格</th>
                        <th>個数</th>
                        <th><button class="btn btn-primary">更新</button></th>
                    </tr>
                    <?php if ($cart->values) : ?>
                        <?php foreach ($cart->values as $item_id => $amount) :  ?>
                            <tr>
                                <td><?= $items[$item_id]['name'] ?></td>
                                <td class="text-right"><?= $items[$item_id]['price'] ?>円</td>
                                <td class="col-3 col-lg-1 col-md-2">
                                    <input class="text-right form-control" type="number" name="amounts[<?= $item_id ?>]" value="<?= $amount ?>">
                                </td>
                                <td class="col-3 col-lg-1 col-md-2">
                                    <a class="btn btn-danger" href="clear.php?item_id=<?= $item_id ?>">削除</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </table>
            </form>
        <?php endif ?>
    </div>
</body>

</html>