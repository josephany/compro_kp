@extends('admin.layouts.app')
@section('content')

<div class="card card-custom">
<div class="card-body">

    <h3 class="mb-4">
        Tambah Product
    </h3>

    <form action="{{ route('products.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">
                Nama Product
            </label>

            <input type="text"
                   name="name"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Deskripsi
            </label>

            <textarea name="description"
                      rows="5"
                      class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">
                Gambar Product
            </label>

            <input type="file"
                   name="image"
                   class="form-control">
        </div>

        <button class="btn btn-primary">
            Simpan
        </button>

    </form>

</div>
</div>

@endsection