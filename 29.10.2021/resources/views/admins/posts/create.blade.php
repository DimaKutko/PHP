@extends('admin_layout')

@section('content')
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Content</label>
        <input type="text" name="content" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <input value="1" name="is_active" type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Is active</label>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
