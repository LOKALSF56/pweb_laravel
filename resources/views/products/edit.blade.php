@extends('Layouts.main')
@section('content')
<div class="container">
    <h1>Edit Data</h1>
    <form action="{{ route('product.update', $Product->id) }}"method="POST">
        @method('put')
        @csrf
        <div>
            <label>Nama</label>
            <input type="text"name="name"placeholder="nama"value="{{$Product->name}}"/>
        </div>
        <div>
            <label>Jumlah</label>
            <input type="text"name="qty"placeholder="qty"value="{{$Product->qty}}"/>
        </div>
        <div>
            <label>Harga</label>
            <input type="text"name="price"placeholder="price"value="{{$Product->price}}"/>
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text"name="description"placeholder="deskripsi"value="{{$Product->description}}"/>
        </div>
        <div>
            <input type="submit"value="Update"/>
        </div>
    </form>
</div>
@endsection