@extends('layouts.dashboard')
@section('content')

<div class="py-3 px-2">
    <form action="{{ url('products/update/'.$product->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label class="form-label">Product name</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id" >
                <option selected value="1">{{$category_name->name}}</option>
                @foreach ($categories as $category)
                <option value="1">{{$category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea class="form-control" id="details" rows="3">{{ $product->details }}</textarea>
        </div>
        <div class="mb-3">
            <input class="btn btn-info" type="submit" name="edit" value="Edit">

        </div>
    </form>
</div>
@endsection
