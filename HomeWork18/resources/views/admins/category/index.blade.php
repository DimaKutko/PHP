@extends('admin_layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @if($categories->isNotEmpty())
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <th>{{$category->name}}</th>
            <td>
                <form action="{{route('categories.edit', ['category' => $category])}}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{route('categories.destroy', ['category' => $category])}}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
