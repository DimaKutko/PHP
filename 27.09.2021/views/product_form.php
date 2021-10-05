<?php include_once 'header.php' ?>

<div class="container">
    <form action="product_create.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $name ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Articele</label>
            <input name="articele" class="form-control" id="exampleInputPassword1" value="<?= $articele ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile03">
                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


<?php include_once 'footer.php' ?>
