<?php
session_start();

//echo '<br>';
//
//PrintArray($GLOBALS);
//echo '<br>';
//
//PrintArray($_GET);
//echo '<br>';
//
//PrintArray($_POST);
//echo '<br>';
//
//PrintArray($_COOKIE);
//echo '<br>';
//
//PrintArray($_FILES);
//echo '<br>';

//echo phpinfo();

include 'functuions_php.php';

AddNummbesColor(110, 5000, 'red');

echo '<br>';

$a = 5;

MyLink($a);
echo $a;

echo '<br>';
echo '<br>';

echo $_SESSION['login'];

PrintArray($_COOKIE);


echo '<br><br>FILE:<br>';
PrintArray(json_decode(file_get_contents('test')));

?>

<form name="test" method="post" action="login.php">
    <p><b>Ваше имя:</b><br>
        <input name="FirstName" type="text" size="40">
    </p>
    <p><b>Ваше пароль:</b><br>
        <input name="password" type="password" size="40">
    </p>
    <p><b>Каким браузером в основном пользуетесь:</b><Br>
        <input type="radio" name="browser" value="ie"> Internet Explorer<Br>
        <input type="radio" name="browser" value="opera"> Opera<Br>
        <input type="radio" name="browser" value="firefox"> Firefox<Br>
    </p>
    <p><input type="submit" value="Отправить">
</form>
