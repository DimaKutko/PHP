<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <?php
                    $pages = ['home', 'products', 'categories'];
                    foreach ($pages  as $value) { ?>
                        <form action="index.php">
                            <button name="page" value="<?= $value ?>" type="submit" class="btn btn-secondary" style="margin: 10px;"><?= ucwords($value) ?></button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>

    <?php if (!empty($errors)) { ?>
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $value) { ?>
                        <li> <?= $value ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>
