<?php
require_once('setting.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include('app/views/header.php') ?>

<body>
    <h2>SITE_TITLE</h2>
    <?= SITE_TITLE ?>

    <h2>BASE_DIR</h2>
    <?= BASE_DIR ?>

    <h2>VIEWS_DIR</h2>
    <?= VIEWS_DIR ?>

    <h2>header.php</h2>
    <?= 'app/views/header.php' ?>
</body>
</html>