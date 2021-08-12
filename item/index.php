<?php
require_once('../setting.php');
require_once('app.php');
require_once('app/controllers/ItemController.php');

<<<<<<< HEAD
$controller = new ItemController();
$controller->index();
=======
$user = new User();
if (!$user->isLogined()) {
    header('Location: ../index.php');
}

$item = new Item();
$item->all();
?>
<!DOCTYPE html>
<html lang="ja">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>
    <div class="container">
        <div class="row item">
            <?php foreach ($item->values as $value) :  ?>
                <div class="card col-4 mt-2 pl-0 pr-0">
                    <img src="../images/now_printing.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['name'] ?></h5>
                        <p class="card-text text-right"><?= $value['price'] ?>円</p>
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
>>>>>>> cb5701d6e9eceeb91af0234fef9719d149f4e131
