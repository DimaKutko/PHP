<?php

namespace App\Models;

class ProductModel extends Model
{
    protected static $table = 'products';
    protected $fillable = ['name', 'sku', 'image'];

    public function removeByKey($key)
    {
        echo 'test';

        $products = static::all();

        $image = $products[$key]->image;

        unlink(__DIR__  . getImagePath($image));

        parent::removeByKey($key);
    }
}
