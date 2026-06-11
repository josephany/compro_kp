@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Products</h2>
<a href="{{ route('products.create') }}"
   class="btn btn-primary">
    + Tambah Product
</a>

</div>

<div class="card card-custom">
<div class="card-body">

    <table class="table align-middle">

        <thead>
            <tr>
                <th>Image</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @foreach($products as $product)

            <tr>

                <td>
                    <img src="{{ asset('storage/'.$product->image) }}"
                         width="100"
                         class="rounded">
                </td>

                <td>{{ $product->name }}</td>

                <td>{{ $product->description }}</td>

                <td>

                    <a href="{{ route('products.edit',$product->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('products.destroy',$product->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

</div>

@endsection
