<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::all(),
        ]);
    }
    public function about()
    {
        return view('blog.about');
    }
    public function contact()
    {
        return view('blog.contact');
    }
    public function post()
    {
        return view('blog.post');
    }
}
