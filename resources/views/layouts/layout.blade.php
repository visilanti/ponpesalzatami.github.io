<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

        <title>Pesantren Al-Zatami</title>
        <link rel="shortcut icon" href="{{ asset('Assets\icons\ic-logo.ico') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('Assets/css/app.css') }}">
    </head>

    <body>
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- content -->
        @yield('content')
         <!-- footer -->
         <section id="footer" class="bg-white">
            <div class="container py-4">
                <footer>
                    <div class="row">
                        <!-- kolom 1 Navigasi-->
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Navigasi</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita Sekolah</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery Sekolah</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan Sosial</a></li>
                                </ul>
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Alumni</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Info PSB</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Prestasi</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Video Kegiatan</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- kolom 2 media sosial -->
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Follow Kami</h5>
                            <div class="d-flex mb-3">
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('Assets/icons/ig.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('Assets/icons/fb.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('Assets/icons/tiktok.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="" target="_blank" class="text-decoration-none text-dark">
                                    <img src="{{ asset('Assets/icons/yt.svg') }}" height="30" width="30" class="me-4" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- kolom 3 kontak -->
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Kontak Kami</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">alzatami@gmail.com</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">021-938-421</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">021-321-xxx</a></li>
                                    <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">021-421-xxx</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- kolom 4 alamat -->
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Alamat Pondok</h5>
                            <p>JL. Jadaria, No 115, Bandung, Jawa Barat</p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>
        <section class="bg-light border-top">
            <div class="container py-4">
                <div class="d-flex justify-content-between">
                    <div>
                        Pesantren Al-Zatami
                    </div>
                    <div class="d-flex">
                        <p class="me-4">Syarat & Ketentuan</p>
                        <p>
                            <a href="/kebijakan" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->

        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => {
                if(window.scrollY > 100){
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    // navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    // navbar.classList.add("navbar-dark");
                }
            };
        </script>
        
    </body>
</html>