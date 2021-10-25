@extends('layout')

@section('body')

<div class="container">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?? null ?>
        </div>
    <?php } ?>

    <form enctype="multipart/form-data" action="/products/create" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" value="<?= $name ?? null ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Articule</label>
            <input name="sku" type="text" class="form-control" value="<?= $sku ?? null ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input name="image" class="form-control form-control-sm" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection
