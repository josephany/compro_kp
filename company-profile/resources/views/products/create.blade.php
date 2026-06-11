<h1>Tambah Product</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Nama Product</label>
        <input type="text" name="name">
    </div>

    <div>
        <label>Deskripsi</label>
        <textarea name="description"></textarea>
    </div>

    <div>
        <label>Image</label>
        <input type="file" name="image">
    </div>

    <button type="submit">Simpan</button>
</form>