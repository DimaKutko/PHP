@extends('admin_layout')

@section('content')
<form 
@if ($post ?? null) 
action="{{route('admin.posts.update')}}"
@else
action="{{route('admin.posts.store')}}"
@endif
method="POST">
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
        <input value="1" name="is_active" type="checkbox" class="form-check-input" id="exampleCheck1" 
        @if ($post) 
            @if ($post->is_active) checked @else null @endif
        @else 
            null 
        @endif
        >
        <label class="form-check-label" for="exampleCheck1">Is active</label>
    </div>
    <input type="hidden" name="id" class="form-control" value="{{$post->id ?? null}}">
    <button type="submit" class="btn btn-primary">
        @if ($post ?? null) Update @else Create @endif
    </button>
</form>
@endsection

