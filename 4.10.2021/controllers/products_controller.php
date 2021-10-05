<?php

class ProductsController
{
    public function index()
    {
        return renderView('products_table');
    }

    public function show()
    {
        return renderView('products_form');
    }

    public function create()
    {
        var_dump($_POST, $_FILES);

        $fileName = null;
        if (!empty($_FILES['image'])) {

            $uploaddir = __DIR__ . '/../storage/';
            $fileName =  basename($_FILES['image']['name']);
            $filePath = $uploaddir . $fileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $filePath);
        }

        $product = new ProductModel();
        $product->name = $_POST['name'];
        $product->sku = $_POST['sku'];
        $product->image = $fileName;

        $product->save();

        // Header('Location: /products');
    }

    public function delete()
    {
    }
}
