@extends('admin_layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('admin.title')}}</th>
            <th scope="col">Category</th>
            <th scope="col">{{__('admin.is_active')}}</th>
            <th scope="col">{{__('admin.date')}}</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @if($posts->isNotEmpty())
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <th>{{$post->title}}</th>
            @if ($post->category_id != null)
                <th>{{\App\Models\Category::where('id', $post->category_id)->first()->name}}</th>
            @else
                <th>-</th>
            @endif
            <td>{{$post->is_active}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <form action="{{route('admin.posts.edit')}}" method="get">
                    <input type="hidden" name='id' value="{{$post->id}}">
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.posts.delete')}}" method="post">
                    @csrf
                    <input type="hidden" name='id' value="{{$post->id}}">
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
