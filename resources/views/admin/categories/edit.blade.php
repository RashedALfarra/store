@extends('layouts.dashboard')
@section('content')

<form class="py-5 px-2" action="{{ url("/categories/update/".$category->id) }}" method="POST">
    @csrf
    @method("PATCH")

    <label>Enter the new name of category</label>
    <input class="form-control" type="text" name="name" value="{{ $category->name }}">

   <div class="py-2"> <input class="btn btn-info" type="submit" name="update" value="Update"></div>
</form>

@endsection
