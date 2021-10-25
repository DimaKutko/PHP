<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $author = Author::first();
//        dump($author->posts->pluck('title'));
        return view('home.index');
    }
}
