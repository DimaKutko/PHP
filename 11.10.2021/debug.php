<?php
require_once __DIR__ .  '/bootstrap.php';

dump(ProductModel::all());

$product = new ProductModel();
$product->name = 'test1';
$product->sku = 'test1';
$product->image = 'test1';

$product->save();

dump(ProductModel::all());


$product2 = new ProductModel();
$product2->name = 'test2';
$product2->sku = 'test2';
$product2->image = 'test2';

$product2->save();

dump(ProductModel::all());
