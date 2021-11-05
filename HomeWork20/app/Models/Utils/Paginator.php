<?php

namespace App\Models\Utils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Paginator extends Model
{
    use HasFactory;

    protected $request;
    protected $model;

    public function __construct(Model $model, Request $request)
    {
        $this->request = $request;
        $this->model = $model;
    }

    public function paging(): array
    {
        $offset = $this->request->get('offset', 0);
        $limit = $this->request->get('limit', 20);
        $total = $this->model::count('id');

        return [
            'offset' => intval($offset),
            'limit' => intval($limit),
            'total' => intval($total),
        ];
    }

    public function get()
    {
        $paging = $this->paging();

        return $this->model::skip(($paging['offset']))
            ->limit($paging['limit'])
            ->get();
    }
}
