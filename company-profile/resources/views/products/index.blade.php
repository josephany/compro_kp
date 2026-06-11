<h1>Daftar Product</h1>

<a href="{{ route('products.create') }}">
    Tambah Product
</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Image</th>
        <th>Aksi</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <img src="{{ asset('storage/' . $product->image) }}" width="120">
            </td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}"> Edit </a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>