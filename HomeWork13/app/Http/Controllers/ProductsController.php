<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostDeleteRequest;
use App\Models\Product;
use Facade\FlareClient\Http\Response;
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

    public function create(PostDeleteRequest $request)
    {
        Product::create($request->all());

        return redirect(route('products'));
    }

    public function delete(Request $request)
    {
        $request->validateWithBag('post', ['id' => ['required']]);

        Product::findOrFail($request->post('id'))->delete();
    }

    public function renderProductTable()
    {
        return view('products.table', [
            'products' => Product::all(),
        ]);
    }
}
