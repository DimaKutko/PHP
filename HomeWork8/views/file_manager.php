<?php include_once 'header.php' ?>

<div class="container">
    <form action="/file_manager/upload" enctype="multipart/form-data" method="POST">
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose image(s)</label>
        </div>
        <div class="mb-3">
            <input class="form-control" multiple type="file" name="image[]" id="formFile">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">FileName</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($images as $value) { ?>
                <tr>
                    <td>
                        <form action="/file_manager/rename" method="POST">
                            <div class="mb-3">
                                <input name="newName" value="<?= $value ?>" class="form-control" aria-describedby="emailHelp">
                                <input type="hidden" name="oldName" value="<?= $value ?>" />
                            </div>
                            <button type="submit" class="btn btn-primary">Rename</button>
                        </form>
                    </td>
                    <td>
                        <img style="height: 150px;" src="<?= getImagePath($value) ?>" class="img-fluid">
                    </td>
                    <td>
                        <form action="/file_manager/delete" method="post">
                            <input type="hidden" name="image" value="<?= $value ?>" />
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



<?php include_once 'footer.php' ?>
