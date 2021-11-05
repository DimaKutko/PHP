<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiAuthorStoreRequest;
use App\Http\Requests\Api\ApiPostUpdateRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Utils\Paginator;

class ApiAuthorController extends Controller
{
    public function index(Request $request)
    {
        $paginator = new Paginator(new Author(), $request);

        $list = $paginator->get();
        $paging = $paginator->paging();

        return response()->json([
            'list' => $list,
            'paging' => $paging,
        ]);
    }

    public function store(ApiAuthorStoreRequest $request)
    {
        Author::create($request->all());

        return response()->json([
            'succes' => true
        ]);
    }

    public function update($id, ApiPostUpdateRequest $request)
    {
        Author::where('id', $id)->update($request->all());

        return response()->json([
            'succes' => true
        ]);
    }

    public function destroy($id)
    {
        Author::where('id', $id)->delete();

        return response()->json([
            'succes' => true
        ]);
    }
}
