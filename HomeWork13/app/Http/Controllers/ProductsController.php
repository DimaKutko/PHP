<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => []
        ]);
    }

    public function show()
    {
        return view('products.show');
    }

    public function create()
    {
        redirect('\products');
    }

    public function delete()
    {
        redirect('\products');
    }

    public function renderProductTable()
    {
        return view('products.table', [
            'products' => []
        ]);
    }
}
