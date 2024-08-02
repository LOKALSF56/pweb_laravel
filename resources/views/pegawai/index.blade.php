@extends('Layouts.main')
@section('content')
    <div class="container">
    <h1>Data Pegawai</h1>
    <a href="/pegawai/create"class="btn btn-success">input data</a>
    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Posisi</th>
        <th>Tanggal Masuk</th>
        <th>Opsi</th>
    </tr>
    @foreach($Pegawai as $pg)
    <tr>
        <td>{{$pg->id}}</td>
        <td>{{$pg->name}}</td>
        <td>{{$pg->email}}</td>
        <td>{{$pg->posisi}}</td>
        <td>{{$pg->tanggalmasuk}}</td>
        <td><a href="/pegawai/{{$pg->id}}/edit"class="btn btn-primary">EDIT</a></td>
        <td><form action="/pegawai/{{$pg->id}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Hapus"class="btn btn-danger">
        </form></td>
    </tr>
    @endforeach
    </table>
    </div>
    @endsection