<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeletePostRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admins.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('admins.posts.create', []);
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->except('_token'));

        return redirect(route('admin.posts'))->with('status', 'success created !');
    }

    public function show()
    {
        return view('admins.posts.show', []);
    }

    public function delete(DeletePostRequest $request)
    {
        Post::findOrFail($request->post('id'))->delete();

        return redirect(route('admin.posts'))->with('status', 'Success delete post !');
    }
}
