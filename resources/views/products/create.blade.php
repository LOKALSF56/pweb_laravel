@extends('Layouts.main')
@section('content')
<div class="container">
    <h1>Buat Produk</h1>
    <form method="POST"action="{{ route('product.store') }}">
        @csrf
        <div>
            <label class="form-label">Nama</label>
            <input class="form-control" type="text"name="name"placeholder="nama"/>
        </div>
        <div>
            <label class="form-label">Jumlah</label>
            <input class="form-control" type="text"name="qty"placeholder="qty"/>
        </div>
        <div>
            <label class="form-label">Harga</label>
            <input class="form-control" type="text"name="price"placeholder="price"/>
        </div>
        <div>
            <label class="form-label">Deskripsi</label>
            <input class="form-control" type="text"name="description"placeholder="deskripsi"/>
        </div>
        <div>
            <input type="submit" class="btn btn-success"value="Simpan"/>
        </div>
    </form>
</div>
@endsection