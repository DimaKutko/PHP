<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiPostStoreRequest;
use App\Http\Requests\Api\ApiPostUpdateRequest;
use App\Models\Post;
use App\Models\Utils\Paginator;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index(Request $request)
    {
        $paginator = new Paginator(new Post(), $request);

        $posts = $paginator->get();
        $paging = $paginator->paging();

        return response()->json([
            'list' => $posts,
            'paging' => $paging,
        ]);
    }

    public function store(ApiPostStoreRequest $request)
    {
        Post::create($request->all());

        return response()->json([
            'succes' => true
        ]);
    }

    public function update($id, ApiPostUpdateRequest $request)
    {
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
