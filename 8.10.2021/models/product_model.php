<?php

class ProductModel extends Model
{
    protected $table = 'products';

    public function removeByKey($key)
    {
        echo 'test';

        $products = parent::all();

        $image = $products[$key]['image'];

        unlink(__DIR__ . '/../' . getImagePath($image));

        parent::removeByKey($key);
    }
}
