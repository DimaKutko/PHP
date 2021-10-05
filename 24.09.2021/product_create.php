 <?php

    include_once 'boostrap.php';

    $errors = [];

    if (empty($_POST['name'])) {
        $errors[] = 'Name is required';
    } else if (strlen($_POST['name'] < 3)) {
        $error[] = 'Is very short';
    }

    if (!empty($errors)) {
        renderView('product_form', ['errors' => $errors]);
    } else {
        renderView('home');
    }
