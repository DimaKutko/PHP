<?php


namespace App\Http\Controllers;


class ProductController
{
    public function index()
    {
        return view('products.index');
    }

    public function renderProductsTable()
    {
        return view('table');
    }
}
