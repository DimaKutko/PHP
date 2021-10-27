<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::all(),
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
        echo 123;

        if (isset($_POST['id'])) {
            $product = Product::findOrFail($_POST['id']);
            $product->delete();
        }
    }

    public function renderProductTable()
    {
        return view('products.index', [
            'products' => Product::all(),
        ]);
    }
}
