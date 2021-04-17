@extends('admin.template')

@section('title','Custom Landing Page')
@section('dash','')
@section('lanpag','active')
@section('layanan','')
@section('akun','')

@section('head')

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

@endsection

@section('content')
@if(Session::get('eror'))
    <script>
        $(function () {
            $('#exampleModal').modal('show');
        });

    </script>
@endif
<div class="row">
    <div class="col-xl-3">
        <form class="user" method="post" action="edit_lp" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="logo">Logo</label>
                <input name="logo" type="text" class="form-control form-control-user" value="{{ $template->Logo }}">
                @error('logo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control form-control-user"
                    value="{{ $template->Alamat }}">
                @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jam_kerja">Jam Kerja</label>
                <input name="jam_kerja" type="text" class="form-control form-control-user"
                    value="{{ $template->Jam_Kerja }}">
                @error('jam_kerja')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ket_jargon">Keterangan Banner</label>
                <input name="ket_jargon" type="text" class="form-control form-control-user"
                    value="{{ $template->Keterangan_Jargon }}">
                @error('ket_jargon')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Gambar Banner</label>
                <br>
                <img src="{{ asset('pengunjung/images/'.$template->Gambar_Jargon) }}" alt=""
                    width="200px" height="auto" class="mb-2">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar_jargon">
                @error('gambar_jargon')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Background Banner</label>
                <br>
                <img src="{{ asset('pengunjung/images/'.$template->Background_Jargon) }}"
                    alt="" width="200px" height="auto" class="mb-2">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="background_jargon">
                @error('background_jargon')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="judul-ucapan">Judul Ucapan</label>
                <input name="judul_ucapan" type="text" class="form-control form-control-user"
                    value="{{ $template->Judul_Ucapan }}">
                @error('judul_ucapan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ucapan">Ucapan</label>
                <input name="ucapan" type="text" class="form-control form-control-user"
                    value="{{ $template->Ucapan }}">
                @error('ucapan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Tanda Tangan</label>
                <br>
                <img src="{{ asset('pengunjung/images/'.$template->Tanda_Tangan) }}" alt=""
                    width="200px" height="auto" class="mb-2">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="tanda_tangan">
                @error('tanda_tangan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama & Nama</label>
                <input name="nama" type="text" class="form-control form-control-user"
                    value="{{ $template->Nama_Pemilik }}">
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="layanan">Layanan</label>
                <input name="layanan" type="text" class="form-control form-control-user"
                    value="{{ $template->Layanan }}">
                @error('layanan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="paket-wisata">Paket Wisata</label>
                <input name="paket_wisata" type="text" class="form-control form-control-user"
                    value="{{ $template->Paket_Wisata }}">
                @error('paket_wisata')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rental-mobil">Rental Mobil</label>
                <input name="rental_mobil" type="text" class="form-control form-control-user"
                    value="{{ $template->Rental_Mobil }}">
                @error('rental_mobil')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Sewa Homestay</label>
                <input name="sewa_homestay" type="text" class="form-control form-control-user"
                    value="{{ $template->Sewa_Homestay }}">
                @error('sewa_homestay')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="galeri">Galeri</label>
                <input name="galeri" type="text" class="form-control form-control-user"
                    value="{{ $template->Galeri }}">
                @error('galeri')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </form>
    </div>
    <div class="col-lg-4">
        <label for="">Gambar Galeri</label>
        <br>
        <a href="#" class="btn btn-info btn-circle mb-5" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus"></i>
        </a>
        @foreach($data as $list)

            <div class="card mb-5">
                <img class="card-img-top" src="{{ asset('pengunjung/images/'.$list->foto) }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $list->nama }}</h4>
                    <p class="card-text">{{ $list->keterangan }}</p>
                    <a href="/edit_gl/{{ $list->id }}" class="btn btn-warning btn-circle">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a href="/hapus_gl/{{ $list->id }}" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>

        @endforeach
    </div>
</div>

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
            <form method="post" action="simpan_gl" enctype="multipart/form-data">
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
                        <input name="deskripsi" type="text"
                            class="form-control form-control-user @error('nama') is-invalid @enderror">
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

@endsection
