<div id='productsTable' class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Article</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->sku}}</td>
                <td>
                    <button type="submit" class="btn btn-danger" onclick="deleteProduct('{{ $product->id }}', '{{ $product->name }}')">Remove</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
