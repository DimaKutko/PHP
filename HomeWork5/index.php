<?php
include_once 'animals_list.php';

AnimalList::addAnimal(new Cat());
AnimalList::addAnimal(new Dog());
AnimalList::addAnimal(new Dolphin());

$animals = AnimalList::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">getVoice</th>
                <th scope="col">getArial</th>
                <th scope="col">getView</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal) { ?>
                <tr>
                    <td><?= $animal->getVoice(); ?></td>
                    <td><?= $animal->getArial(); ?></td>
                    <td><img src="<?= $animal->getView() ?>" class="img-thumbnail" alt="..."></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
