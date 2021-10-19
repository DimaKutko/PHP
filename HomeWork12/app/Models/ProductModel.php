<?php

namespace App\Models;

class ProductModel extends Model
{
    protected static $table = 'products';
    protected $fillable = ['name', 'sku', 'image'];

    public function delete($key)
    {
        $products = static::all();

        $filePath = getImagePath($products[$key]->image);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        parent::delete($key);
    }
}
