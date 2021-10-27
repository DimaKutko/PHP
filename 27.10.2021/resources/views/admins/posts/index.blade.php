@extends('admin_layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Is active</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        @if($posts->isNotEmpty())
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <th>{{$post->title}}</th>
            <td>{{$post->is_active}}</td>
            <td>{{$post->created_at}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
