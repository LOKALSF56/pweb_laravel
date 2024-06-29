@extends('Layouts.main')
@section('content')
    <div class="container">
    <h1>Produk</h1>
    <a href="/product/create"class="btn btn-success">input data</a>
    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Quantity</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Opsi</th>
    </tr>
    @foreach($Product as $pd)
    <tr>
        <td>{{$pd->id}}</td>
        <td>{{$pd->name}}</td>
        <td>{{$pd->qty}}</td>
        <td>{{$pd->price}}</td>
        <td>{{$pd->description}}</td>
        <td><a href="/product/{{$pd->id}}/edit"class="btn btn-primary">EDIT</a></td>
        <td><form action="/product/{{$pd->id}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Hapus"class="btn btn-danger">
        </form></td>
    </tr>
    @endforeach
    </table>
    </div>
    @endsection