<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'information_schema';
$db_port = 8889;

// $mysqli = new mysqli(
//     $db_host,
//     $db_user,
//     $db_password,
//     $db_db,
//     $db_port
// );

// if ($mysqli->connect_error) {
//     echo 'Errno: ' . $mysqli->connect_errno;
//     echo '<br>';
//     echo 'Error: ' . $mysqli->connect_error;
//     exit();
// }

// echo 'Success: A proper connection to MySQL was made.';
// echo '<br>';
// echo 'Host information: ' . $mysqli->host_info;
// echo '<br>';
// echo 'Protocol version: ' . $mysqli->protocol_version;
// echo '<br>';
// echo '<br>';
// var_dump($mysqli);
// $mysqli->close();

// var_dump($mysqli);

$connector = mysqli_connect($db_host . ':' . $db_port, 'root', 'root', 'store');

$result = mysqli_query($connector, 'SELECT * FROM products');

var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));

mysqli_close($connector);
