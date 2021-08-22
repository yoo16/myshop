<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>">Shopping</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>item/">商品</a>
                </li>
            </ul>
            
            <?php if ($this->user->value['id']) : ?>
                <a href="<?= BASE_URL ?>cart/">
                    <img class="icon-cart" src="<?= BASE_URL ?>images/icon-cart.svg" alt="">
                </a>
                <?php if (!empty($this->cart)) : ?>
                    <lable class="badge bg-danger m-2"><?= $this->cart->total_amount ?></lable>
                <?php endif ?>
                <a class="btn btn-sm btn-primary" aria-current="page" href="<?= BASE_URL ?>login/logout.php">ログアウト</a>
            <?php else : ?>
                <a class="btn btn-sm btn-primary" aria-current="page" href="<?= BASE_URL ?>login/">ログイン</a>
            <?php endif ?>
        </div>
    </div>
</nav>