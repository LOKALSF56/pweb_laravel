@extends('Layouts.main')
@section('content')
<div class="container">
    <h1>Masukan Data Pegawai</h1>
    <form method="POST"action="{{ route('pegawai.store') }}">
        @csrf
        <div>
            <label class="form-label">Nama</label>
            <input class="form-control" type="text"name="name"placeholder="nama"/>
        </div>
        <div>
            <label class="form-label">Email</label>
            <input class="form-control" type="text"name="email"placeholder="email"/>
        </div>
        <div>
            <label class="form-label">Password</label>
            <input class="form-control" type="password"name="password"placeholder="password"/>
        </div>
        <div>
            <label class="form-label">Posisi</label>
            <input class="form-control" type="text"name="posisi"placeholder="posisi"/>
        </div>
        <div>
            <label class="form-label">Tanggal Masuk</label>
            <input class="form-control" type="date"name="tanggalmasuk"placeholder="tanggalmasuk"/>
        </div>
        <div>
            <input type="submit" class="btn btn-success"value="Simpan"/>
        </div>
    </form>
</div>
@endsection