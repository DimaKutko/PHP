<?php include_once __DIR__ . '/../widgets/header.php'; ?>

<div class="container">
    <form method="post" action="index.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" value="<?= $title ?>" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image link</label>
            <input name="img" value="<?= $img ?>" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select name="category" class="form-select" aria-label="Default select example">
                <?php foreach ($categories as $val) : ?>
                    <option selected="selected" value="<?= $val ?>"><?= $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Subtitle</label>
            <textarea name="subtitle" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $subtitle ?></textarea>
        </div>
        <button name="page" value="products" type="submit" class="btn btn-primary">Add</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($products ?? []); $i++) { ?>
                <tr>
                    <th scope="row"><?= $i + 1 ?></th>
                    <td><?= $products[$i]['title'] ?></td>
                    <td><?= $products[$i]['category'] ?></td>
                    <td><?= $products[$i]['subtitle'] ?></td>
                    <td><img src="<?= $products[$i]['img'] ?>" class="img-thumbnail" alt="..."></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once __DIR__ . '/../widgets/footer.php'; ?>
