@extends('layouts.dashboard')
@section('content')

<form class="py-5 px-2" action="{{ url('categories/store') }}" method="POST">
    @csrf
    <label>Enter the name of category</label>
    <input class="form-control" type="text" name="name" value="">

   <div class="py-2"> <input class="btn btn-info" type="submit" name="create" value="Create"></div>
</form>

@endsection
