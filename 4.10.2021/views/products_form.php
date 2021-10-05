<?php include_once __DIR__ . '/header.php'; ?>
<div class="container">
    <form enctype="multipart/form-data" action="/products/create" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Articule</label>
            <input name="sku" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input name="image" class="form-control form-control-sm" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

<?php include_once __DIR__ . '/footer.php'; ?>
