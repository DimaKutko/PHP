<?php include_once __DIR__ . '/../widgets/header.php'; ?>

<div class="container">
    <div class="row row-cols-2">
        <?php foreach ($products as $value) { ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $value['img'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['title'] ?></h5>
                        <p class="card-text"><?= $value['subtitle'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php include_once __DIR__ . '/../widgets/footer.php'; ?>
