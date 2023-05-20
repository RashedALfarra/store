@extends('layouts.dashboard')
@section('content')
    <div class="py-3">
        <form action="{{ url('products/store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Product name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id">
                    <option value='#'>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="1">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label">details</label>
                <textarea class="form-control" id="details" name="details" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="ؤreate" value="Create">
            </div>
        </form>
    </div>
@endsection
