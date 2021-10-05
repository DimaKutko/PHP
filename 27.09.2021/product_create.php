 <?php

    include_once 'core/boostrap.php';

    $errors = [];

    $name = $_POST['name'] ?? null;
    $articele = $_POST['articele'] ?? null;

    if (empty($name)) {
        $errors[] = 'Name is required';
    } else if (strlen($name) < 4) {
        $errors[] = 'Is very short';
    }

    if (!empty($errors)) {
        renderView('product_form', [
            'errors' => $errors,
            'articele' => $articele,
            'name' => $name,
        ]);
    } else {
        include_once 'core/file_utils.php';

        $prosucts = readFromFile();

        $prosucts[] = array(
            'name' => $name,
            'image' => 'https://www.gardendesign.com/pictures/images/675x529Max/site_3/helianthus-yellow-flower-pixabay_11863.jpg',
        );

        saveToFile($prosucts);

        renderView('table');
    }
