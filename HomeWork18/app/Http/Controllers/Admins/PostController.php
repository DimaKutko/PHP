<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeletePostRequest;
use App\Http\Requests\IdPostRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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

    public function edit(IdPostRequest $request)
    {
        return view('admins.posts.edit', [
            'post' => Post::findOrFail($request->get('id'))
        ]);
    }

    public function update(UpdatePostRequest $request)
    {
        $post = Post::where('id', $request->post('id'))->first();

        $post->title = $request->post('title');
        $post->content = $request->post('content');
        $post->is_active = $request->post('is_active') ?? false;
        $post->category_id = $request->post('category_id') ?? null;
        $post->save();

        return redirect(route('admin.posts'))->with('status', 'success updated !');
    }

    public function delete(IdPostRequest $request)
    {
        Post::findOrFail($request->post('id'))->delete();

        return redirect(route('admin.posts'))->with('status', 'Success delete post !');
    }
}
