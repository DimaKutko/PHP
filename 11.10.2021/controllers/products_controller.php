<?php

class ProductsController
{
    public function index()
    {
        $product = new ProductModel();

        $products = $product->all();

        return renderView('products_table', [
            'products' => $products
        ]);
    }

    public function show()
    {
        return renderView('products_form');
    }

    public function create()
    {
        $error = self::validateNewProduct();

        if (!empty($error)) {
            return renderView('products_form', [
                'error' => $error,
                'sku' => $_POST['sku'] ?? null,
                'name' => $_POST['name'] ?? null,
            ]);
        }

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

        redirect('/products');
    }

    public function delete()
    {
        $product = new ProductModel();

        $product->removeByKey($_POST['id']);

        redirect('/products');
    }

    private static function  validateNewProduct()
    {

        $name = $_POST['name'] ?? null;

        if (empty($name)) {
            return 'Name is required';
        }

        $sku = $_POST['sku'];

        if (empty($sku)) {
            return 'Articule is required';
        }

        $imageError = validateImage($_FILES);

        if (!empty($imageError)) return $imageError;

        return null;
    }
}
