<?php include_once __DIR__ . '/../widgets/header.php'; ?>

<div class="container">
    <div class="row row-cols-2">
        <?php
        $nullImg = 'https://miro.medium.com/max/1000/1*-Nr0OP_Nu7b2NPrcgJ1SuA.png';

        foreach ($products as $value) { ?>
            <div class="col" style="padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $value['img'] ?? $nullImg ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['title'] ?? null ?></h5>
                        <p class="card-text"><?= $value['subtitle'] ?? null ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php include_once __DIR__ . '/../widgets/footer.php'; ?>
