@extends('admin.template')

@section('title','Dashboard')
@section('dash','')
@section('lanpag','')
@section('layanan','')
@section('akun','active')

@section('content')

<form action="/ubah_akun/{{ Auth::user()->id }}" method="post">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input value="{{ Auth::user()->email }}" name="email" type="email" class="form-control"
            id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
