@extends('admin_layout')

@section('content')
<form action="{{route('categories.update', ['category' => $category])}}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{$category->name}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

