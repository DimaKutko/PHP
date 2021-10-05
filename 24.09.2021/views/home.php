<?php include_once 'header.php' ?>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <div class="col" style="padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $image ?? null ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include_once 'footer.php' ?>
