@extends('admin.layouts.app')
@section('content')

<div class="card card-custom">
<div class="card-body">

    <h3 class="mb-4">
        Edit Product
    </h3>

<form action="{{ route('products.update', $product->id) }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf

    @method('PUT')

    <div class="mb-3">
        <label>Nama Product</label>
        <input type="text"
               name="name"
               value="{{ $product->name }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description"
                  rows="5"
                  class="form-control">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3">
        <img src="{{ asset('storage/' . $product->image) }}"
             width="120">
    </div>

    <div class="mb-3">
        <label>Ganti Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit">
        Update
    </button>
</form>

@endsection