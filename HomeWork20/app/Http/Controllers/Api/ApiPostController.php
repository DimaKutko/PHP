<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiPostController extends Controller
{
    public function index(Request $request)
    {
        $offset = $request->get('offset', 0);
        $limit = $request->get('limit', 20);

        $posts = Post::skip(($offset))->limit($limit)->get();
        $total = Post::count('id');
        return response()->json([
            'list' => $posts,
            'paging' => [
                'offset' => intval($offset),
                'limit' => intval($limit),
                'total' => intval($total),
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                // 'error' => $validator->messages()->first(),
                'succes' => false,
            ]);
        }


        Post::create($request->all());
        return response()->json([
            'succes' => true
        ]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'max:255|min:3',
            'content' => 'max:1024',
        ]);

        if ($validator->fails()) {
            return response()->json([
                // 'error' => $validator->messages()->first(),
                'succes' => false,
            ]);
        }

        Post::where('id', $id)->update($request->all());

        return response()->json([
            'succes' => true
        ]);
    }

    public function destroy($id)
    {
        Post::where('id', $id)->delete();

        return response()->json([
            'succes' => true
        ]);
    }
}
