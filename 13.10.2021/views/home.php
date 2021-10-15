<?php include_once 'header.php' ?>

<div class="container">
    <?php foreach ($methods as $value) {
        $method = $value['method'];
    ?>
        <div class="alert alert-<?= $method == 'POST' ? 'primary' : 'success' ?>" role="alert">
            <?= $method ?> : <?= $value['url_path'] ?> (<?= $value['handler'] ?>)
        </div>
    <?php } ?>
</div>

<?php include_once 'footer.php' ?>
