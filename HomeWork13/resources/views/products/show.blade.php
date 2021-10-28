@extends('layout')

@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/products/create" method="POST">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control" value="<?= $name ?? null ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Articule</label>
            <input name="sku" type="text" class="form-control" value="<?= $sku ?? null ?>">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

@endsection
