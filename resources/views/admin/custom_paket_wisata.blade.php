@extends('admin.template')

@section('title','Custom Paket Wisata')
@section('dash','')
@section('lanpag','')
@section('layanan','active')
@section('akun','')

@section('head')

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="{{ asset('admin/css/table.css') }}">

@endsection

@section('content')

@if(Session::get('eror'))
    <script>
        $(function () {
            $('#exampleModal').modal('show');
        });

    </script>
@endif
<a class="btn btn-success mb-3" href="https://codepen.io/collection/XKgNLN/" target="_blank" data-toggle="modal"
    data-target="#exampleModal"><i class="fas fa-plus"></i>Tambah Data</a>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $list)

            <tr>
                <td>{{ $list->judul }}</td>
                <style>
                    td.isi {
                        display: block;
                        display: -webkit-box;
                        width: 200px;
                        margin: 0 auto;
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                </style>
                <td class="isi">{!!$list->isi!!}</td>
                <td><img src="{{ asset('pengunjung/images/'.$list->foto) }}" width="100px"
                        height="auto" alt="">
                </td>
                <td>
                    <a href="/edit_pw/{{ $list->id }}"><button type="button" class="btn btn-primary btn-xs dt-edit"
                            style="margin-right:16px;">
                            <i class="fas fa-pen"></i>
                        </button></a>
                    <a href="#"><button type="button" class="btn btn-danger btn-xs dt-delete"
                            onclick="return konfirmasi({{ $list->id }});">
                            <i class="fas fa-trash"></i>
                        </button></a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="simpan_pw" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" type="text"
                            class="form-control form-control-user @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi"
                            class="form-control form-control-user @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        <script>
                            CKEDITOR.replace('deskripsi');

                        </script>
                        @error('deskripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto</label>
                        <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                        @error('foto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function konfirmasi(a) {
        if (confirm('Apakah Anda yakin untuk menghapus data ini?')) {
            window.location.href = "/hapus_pw/" + a;
        }
    }

</script>
@endsection
