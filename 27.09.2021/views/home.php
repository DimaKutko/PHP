<?php include_once 'header.php' ?>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <?php

        include_once 'core/file_utils.php';

        $products = readFromFile();

        foreach ($products as $value) { ?>
            <div class="col" style="padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $value['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $value['name'] ?? null ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include_once 'footer.php'; ?>
