<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $methods = RouterList::all();

        return view('home.index', [
            // 'methods' => $methods
        ]);
    }
}
