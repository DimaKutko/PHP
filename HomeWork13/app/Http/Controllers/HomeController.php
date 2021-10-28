<?php

namespace App\Http\Controllers;

use Dotenv\Parser\Value;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', []);
    }
}
