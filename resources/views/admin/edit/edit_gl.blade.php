@extends('admin.template')

@section('title','Custom Gallery')

@section('content')

<form method="post" action="/edit_gl/{{ $data->id }}" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label>Nama</label>
            <input name="nama" value="{{ $data->nama }}" type="text"
                class="form-control form-control-user @error('nama') is-invalid @enderror">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input name="deskripsi" value="{{ $data->keterangan }}" type="text"
                class="form-control form-control-user @error('nama') is-invalid @enderror">
            @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Foto</label>
            <br>
            <img class="mb-3" src="{{ asset('pengunjung/images/'.$data->foto) }}" alt=""
                width="200px" height="auto">
            <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
            @error('foto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection
