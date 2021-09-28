<?php session_start(); ?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
</head>

<body style='padding: 30px;'>
    <form method='post' action='login_controller.php'>
        <div class='mb-3'>
            <label for='exampleInputEmail1' class='form-label'>Email address</label>
            <input name='email' type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
        </div>
        <div class='mb-3'>
            <label for='exampleInputPassword1' class='form-label'>Password</label>
            <input name='password' type='password' class='form-control' id='exampleInputPassword1'>
        </div>
        <button type='submit' class='btn btn-primary'>LOGIN</button>
    </form>
    <?php include 'table.php';
    echo GenerateTable(); ?>
</body>

</html>
