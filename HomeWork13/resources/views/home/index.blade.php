@extends('layout')


@section('content')

<div class='container'>
    <?php foreach ($routes as $value) { ?>
        <div class="alert alert-success" role="alert">
            <?= $value->getPath() ?>
        </div>
    <?php } ?>
</div>
@endsection
