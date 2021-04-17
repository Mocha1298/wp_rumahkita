@extends("pengunjung.template")
@section("judul","SELAMAT DATANG")
@section("home","active")
@section("pw","")
@section("sh","")
@section("rm","")

@section("content")
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url('/pengunjung/images/{{ $data->Background_Jargon }}')">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-5 mt-5 pt-5">
                    <h1 class="mb-3">{{ $data->Logo }}</h1>
                    <p>{{ $data->Keterangan_Jargon }}</p>
                    <p class=" mt-5"><a href="#info" class="btn btn-primary">Selengkapnya</a></p>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="white-dots">
                        <img src="{{ asset('pengunjung/images/'.$data->Gambar_Jargon) }}"
                            alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info" class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2 class="h5 mb-4">{{ $data->Judul_Ucapan }}</h2>
                <p>{{ $data->Ucapan }}</p>
                <div class="d-flex align-items-center">
                    <span class="sign mr-4">
                        <img src="{{ asset('pengunjung/images/'.$data->Tanda_Tangan) }}"
                            alt="" class="img-fluid">
                    </span>
                    <div>
                        <span class="d-block font-weight-bold">{{ $data->Nama_Pemilik }}</span>
                        <span>Pemilik</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <style>
        .container .row .col-lg-4.col-md-6.mb-4 {
            border: none;
        }

    </style>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-5">
                <h5 class="subtitle">Layanan</h5>
                <h2>{{ $data->Layanan }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" onclick="return rdr('/paket_wisata');">
                <div class="feature-1">
                    <span class="wrap-icon">
                        <span class="icon-camera"></span>
                    </span>
                    <h3>Paket Wisata</h3>
                    <p>{{ $data->Paket_Wisata }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" onclick="return rdr('/rental_mobil');">
                <div class="feature-1">
                    <span class="wrap-icon">
                        <span class="icon-car"></span>
                    </span>
                    <h3>Rental Mobil</h3>
                    <p>{{ $data->Rental_Mobil }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" onclick="return rdr('sewa_homestay');">
                <div class="feature-1">
                    <span class="wrap-icon">
                        <span class="icon-hotel"></span>
                    </span>
                    <h3>Sewa Homestay</h3>
                    <p>{{ $data->Sewa_Homestay }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center  mb-5">
            <div class="col-md-7 text-center">
                <h3 class="section-heading text-center">Galeri</h3>
                <p class="mb-5 lead">{{ $data->Galeri }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="nonloop-block-13 owl-carousel">
                    @foreach($galeri as $data)

                        <div class="news-1" style="background-image: url('/pengunjung/images/{{ $data->foto }}');">
                            <div class="text">
                                <h3><a href="#">{{ $data->nama }}</a></h3>
                                <span class="category d-block mb-3">Paket Wisata</span>
                                <p class="mb-4">{{ $data->keterangan }}</p>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function rdr(x) {
        window.location.href = x;
    }

</script>
@endsection
