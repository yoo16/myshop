<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/myshop/"><?= SITE_TITLE ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if ($user->value) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/myshop/item/">商品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myshop/cart/">カート</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myshop/logout.php">ログアウト</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/myshop/login.php">ログイン</a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>