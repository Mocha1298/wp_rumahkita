<!doctype html>
<html lang="en">

<head>
    <title>@yield("judul")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/pengunjung/images/logo.png') }}"
        type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('pengunjung/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('pengunjung/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pengunjung/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pengunjung/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pengunjung/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pengunjung/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pengunjung/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('pengunjung/css/aos.css') }}">
    <script src="{{ asset('pengunjung/js/jquery-3.3.1.min.js') }}"></script>


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('pengunjung/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    <div class="site-wrap" id="home-section">
        <div class="icon-bar" on>
            <a href="/whatsapp" class="icon-whatsapp"></a>
            <a href="#" onclick="return map();" class="icon-map"></a>
            <a href="#" class=""></a>
        </div>

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="/">{{ $template->Logo }}<span class="text-primary">.com</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5" style="cursor:pointer;">
                            <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                            <span>{{ $template->Logo }}, <br> {{ $template->Alamat }}</span>
                        </div>
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                            <span>{{ $template->Jam_Kerja }}</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-black"></span></a></span>

                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li><a href="/" class="nav-link">Home</a></li>
                            <li>
                                <button class="btn btn-white-smoke" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown"
                                    style="letter-spacing: 0;width: 90px;font-size:1rem;text-transform:capitalize;padding-top:9px">
                                    Layanan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width:100px">
                                    <a class="dropdown-item" href="paket_wisata">Paket Wisata</a>
                                    <a class="dropdown-item" href="sewa_homestay">Sewa Homestay</a>
                                    <a class="dropdown-item" href="rental_mobil">Rental Mobil</a>
                                </div>
                            </li>
                            <li><a href="login" class="nav-link login">Admin</a></li>
                        </ul>
                    </nav>
                    <div class="top-social ml-auto">
                        <a href="/facebook"><span class="icon-facebook"></span></a>
                        <a href="/instagram"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
        </header>
        @yield("content")
        <footer class="site-footer" style="padding:0 0 20px 0">
            <div class="container">
                <div class="row mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | Jasa Bangun Website, Photographer, Videographer Hubungi
                                <a href="https://www.instagram.com/mocha_mad2/">Mochammad</a>, Design by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <script>
        function map() {
            window.location.href = "https://goo.gl/maps/arRHKk4J2s6e2vMx6";
        }

    </script>

    <script src="{{ asset('pengunjung/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('pengunjung/js/popper.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('pengunjung/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('pengunjung/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('pengunjung/js/aos.js') }}"></script>

    <script src="{{ asset('pengunjung/js/main.js') }}"></script>
    <script>
        // ===== Scroll to Top ==== 
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(0); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(0); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function () { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 0);
        });

    </script>
</body>

</html>
