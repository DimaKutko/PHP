<?php include_once __DIR__ . '/header.php'; ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Article</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $value) {
                $key = array_search($value, $products);
            ?>
                <tr>
                    <th name='id' value='<?= $key ?>' scope="row"><?= $key ?></th>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['sku'] ?></td>
                    <td><img style="height: 150px;" src="<?= getImagePath($value['image']) ?>" class="img-fluid"></td>
                    <td>
                        <form action="/products/delete" method="post">
                            <input type="hidden" name="id" value="<?= $key ?>" />
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once __DIR__ . '/footer.php'; ?>
