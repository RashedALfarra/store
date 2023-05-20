@extends('layouts.dashboard')
@section('content')
    <div class="py-3 px-2">
        <form action="{{url('categories/create')}}" method="GET">
            <input class="btn btn-info" type="submit" value="New">
        </form>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ url('/categories/edit/'. $category->id) }}" method="GET">
                            <input class="btn btn-info" type="submit" name="edit" value="Edit">

                        </form>

                        <form action="{{ url('categories/delete/'. $category->id) }}" method="get">
                            <input class="btn btn-danger" type="submit" name="delete" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
