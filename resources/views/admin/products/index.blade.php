@extends('layouts.dashboard')
@section('content')
    <div class="py-3 px-2">
        <form action="{{url('products/create')}}" method="GET">
            <input class="btn btn-info" type="submit" name="new" value="New">
        </form>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->details }}</td>
                    <td>{{ $product->price }}</td>
                    <td>


                        <form action="{{ url('admin/products/delete/' . $product->id) }}" method="GET">
                            <input class="btn btn-danger" type="submit" name="delete" value="Delete">
                        </form>
                        <form action="{{ url('products/edit/' . $product->id) }}" method="GET">
                            <input class="btn btn-info" type="submit" name="edit" value="Edit">
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
