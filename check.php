<?php
require_once('setting.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include(VIEWS_DIR.'header.php') ?>

<body>
    <h2>SITE_TITLE</h2>
    <?= SITE_TITLE ?>

    <h2>BASE_DIR</h2>
    <?= BASE_DIR ?>

    <h2>VIEWS_DIR</h2>
    <?= VIEWS_DIR ?>

    <h2>header.php</h2>
    <?= VIEWS_DIR.'header.php' ?>
</body>
</html>