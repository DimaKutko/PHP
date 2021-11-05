@extends('admin_layout')

@section('content')
<form action="{{route('admin.posts.update')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{$post->title ?? null}}">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Content</label>
        <input type="text" name="content" class="form-control" value="{{$post->content ?? null}}">
    </div>
    <div class="mb-3 form-check">
        <input value="1" name="is_active" type="checkbox" class="form-check-input" id="exampleCheck1" @if ($post->is_active) checked @else null @endif>
        <label class="form-check-label" for="exampleCheck1">Is active</label>
    </div>
    <div class="mb-3">
    <select title="Category" name="category_id" class="form-select" aria-label="Default select example">
        @foreach (\App\Models\Category::all() as $category)
        <option @if($post->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <input type="hidden" name="id" class="form-control" value="{{$post->id ?? null}}">
    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Update </button>
    </div>    
</form>
@endsection

