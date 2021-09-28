<?php include_once __DIR__ . '/../widgets/header.php'; ?>

<div class="container">
    <form method="post" action="index.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <input name="category" type="text" class="form-control" value="<?= $category ?>">
        </div>
        <button name="page" value="categories" type="submit" class="btn btn-primary">Add</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name category</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($categories); $i++) { ?>
                <tr>
                    <th scope="row"><?= $i + 1 ?></th>
                    <td><?= $categories[$i] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once __DIR__ . '/../widgets/footer.php'; ?>
