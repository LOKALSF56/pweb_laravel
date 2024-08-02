@extends('Layouts.main')
@section('content')
<div class="container">
    <h1>Ubah Pegawai</h1>
    <form action="{{ route('pegawai.update', $Pegawai->id) }}"method="POST">
        @method('put')
        @csrf
        <div>
            <label class="form-label">Nama</label>
            <input class="form-control" type="text"name="name"placeholder="nama"value="{{$Pegawai->name}}"/>
        </div>
        <div>
            <label class="form-label">Email</label>
            <input class="form-control"type="text"name="email"placeholder="email"value="{{$Pegawai->email}}"/>
        </div>
        <div>
            <label class="form-label">Password</label>
            <input class="form-control" type="password"name="password"placeholder="price"value="{{$Pegawai->password}}"/>
        </div>
        <div>
            <label class="form-label">posisi</label>
            <input class="form-control" type="text"name="posisi"placeholder="deskripsi"value="{{$Pegawai->posisi}}"/>
        </div>
        <div>
            <label class="form-label">tanggalmasuk</label>
            <input class="form-control" type="date"name="tanggalmasuk"placeholder="tanggalmasuk"value="{{$Pegawai->tanggalmasuk}}"/>
        </div>
        <div>
            <input class="btn btn-success" type="submit"value="Update"/>
        </div>
    </form>
</div>
@endsection