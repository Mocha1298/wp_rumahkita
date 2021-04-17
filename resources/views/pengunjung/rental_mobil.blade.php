@extends("pengunjung.template")

@section("judul","Rental Mobil")


@section("content")
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url('pengunjung/images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5 mt-5 pt-5">
                    <h1 class="mb-3">Rental Mobil</h1>
                    <p>{{ $template->Rental_Mobil }}</p>
                    <p><a href="#info" class="btn btn-primary">Simak Informasi</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="info" class="site-section bg-white">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-7 text-center mb-5">
                <h2 class="section-heading text-center">RENTAL MOBIL KAMI</h2>
                <p></p>
            </div>
        </div>

        <div class="row">
            @foreach($data as $list)

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-entry-1 h-100">
                        <a href="#" data-toggle="modal" data-target="#exampleModal{{ $list->id }}">
                            <img src="pengunjung/images/{{ $list->foto }}" alt="Image" class="img-fluid">
                        </a>
                        <!-- <div class="post-entry-1-contents">

                            <h2><a href="#">{{ $list->judul }}</a></h2>
                            {!! $list->isi !!}
                            </ul>
                        </div> -->
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $list->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $list->judul }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="pengunjung/images/{{ $list->foto }}" alt="Image" class="img-fluid">
                                {!!$list->isi!!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
