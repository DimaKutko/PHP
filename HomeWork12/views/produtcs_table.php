<div id='productsTable' class="container">
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
            <?php foreach ($products as $key => $product) { ?>
                <tr>
                    <th name='id' product='<?= $key ?>' scope="row"><?= $key ?></th>
                    <td><?= $product->name ?></td>
                    <td><?= $product->sku ?></td>
                    <td><img style="height: 150px;" src="<?= getImagePath($product->image) ?>" class="img-fluid"></td>
                    <td>
                        <button type="submit" class="btn btn-danger" onclick="deleteProduct(<?= $key ?>, '<?= $product->name ?>')">Remove</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
