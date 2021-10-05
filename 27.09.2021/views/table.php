<?php include_once 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-image">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'core/file_utils.php';
                    $products = readFromFile();
                    foreach ($products as $value) { ?>
                        <tr>
                            <th scope="row"><?= $value['name'] ?></th>
                            <td class="w-25">
                                <img src="<?= $value['image'] ?>" class="img-fluid img-thumbnail" alt="Sheep">
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>
