<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Product</label>
        <input type="text"
               name="name"
               value="{{ $product->name }}">
    </div>

    <div>
        <label>Deskripsi</label>
        <textarea name="description">{{ $product->description }}</textarea>
    </div>

    <div>
        <img src="{{ asset('storage/' . $product->image) }}"
             width="120">
    </div>

    <div>
        <label>Ganti Image</label>
        <input type="file" name="image">
    </div>

    <button type="submit">
        Update
    </button>
</form>