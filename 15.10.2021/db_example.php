<?php

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

// $db_host = '127.0.0.1';
// $db_user = 'root';
// $db_password = 'root';
// $db_db = 'information_schema';
// $db_port = 8889;

// $connector = mysqli_connect($db_host . ':' . $db_port, 'root', 'root', 'store');

// $result = mysqli_query($connector, 'SELECT * FROM products');

// var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));

// mysqli_close($connector);

include_once __DIR__ . '/bootstrap.php';

use App\Models\ProductModel;

// use App\Core\ModelDrivers\MySqlModelDriver;
// $mysql = new MySqlModelDriver('products');

// print_r($mysql->getAll());

$product2 = new ProductModel();
$product2->name = 'test name 2';
$product2->sku = 'test sku 2';
$product2->image = 'test image 2';

$product3 = new ProductModel();
$product3->name = '111';
$product3->sku = '222';
$product3->image = '333';

// $product2->delete('0');

dump($product2::all());
