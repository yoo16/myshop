<?php
require_once('setting.php');

//ログイン処理
$message = '';
if (!empty($_POST)) {
    if ($user->auth($_POST['login_name'], $_POST['password'])) {
        header('Location: item/index.php');
    } else {
        $message = 'ログイン名、パスワードが正しくありません';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<?php include(COMPONENTS_DIR . 'head.php') ?>

<body>
    <?php include(COMPONENTS_DIR . 'nav.php') ?>
    <div class="container">
        <form action="login.php" method="post">

            <div>
                <!-- エラーメッセージ -->
                <?php if ($message) : ?>
                    <p class="alert alert-danger"><?= $message ?></p>
                <?php endif ?>

                <!-- フォーム -->
                <div class="">
                    <div class="form-group">
                        <label for="login_name">ログイン名</label>
                        <input class="form-control" type="text" name="login_name">
                    </div>

                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div>
                        <button class="btn btn-primary">ログイン</button>
                        <a href="index.php" class="btn btn-outline-primary">TOP</a>
                    </div>
                </div>

            </div>

        </form>

    </div>
</body>

</html>