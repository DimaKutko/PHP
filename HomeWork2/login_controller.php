<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if (!emptyStr($email) and !emptyStr($password)) {
    $_SESSION[$email] = $password;
}

header("Location: index.php");

function emptyStr($str)
{
    return is_string($str) && strlen($str) === 0;
}
