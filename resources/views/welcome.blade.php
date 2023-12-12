    @extends('layouts.layout')
    @section('content')   
        <!-- hero -->
        <section id="hero" class="px-0">
            <div class="container text-center text-white">
                <div class="hero-title">
                    <div class="hero-text">Selamat Datang di <br> Pesantren Al-Zatami</div>
                    <h5>Pondok Pesantren Mahasiswa Berbasis Kajian Kitab Kuning</h5>
                </div>
            </div>
        </section>
        <!-- end hero -->
        <!-- program -->
        <section id="program" style="margin-top: -40px">
            <div class="container col-xxl-9">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col mb-2">
                        <div class="bg-white rounded-3 shadow p-3 justify-content-between p-3 d-flex align-items-center">
                            <div>
                                <p>Pendidikan <br>Berkualitas</p>
                            </div>
                            <img src="{{ asset('Assets/ic-book.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col mb-2">
                        <div class="bg-white rounded-3 shadow p-3 justify-content-between p-3 d-flex align-items-center">
                            <div>
                                <p>Pendidikan <br> Berakhlak</p>
                            </div>
                            <img src="{{ asset('Assets/ic-globe.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col mb-2">
                        <div class="bg-white rounded-3 shadow p-3 justify-content-between p-3 d-flex align-items-center">
                            <div>
                                <p>Pendidikan <br> Muamalah</p>
                            </div>
                            <img src="{{ asset('Assets/ic-neraca.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col mb-2">
                        <div class="bg-white rounded-3 shadow p-3 justify-content-between p-3 d-flex align-items-center">
                            <div>
                                <p>Pendidikan <br> Teknologi</p>
                            </div>
                            <img src="{{ asset('Assets/ic-komputer.png') }}" height="55" width="55" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end program -->

        <!-- berita -->
        <section id="berita" class="py-5">
            <div class="container">

                <div class="header-berita text-center">
                    <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
                </div>

                <div class="row py-5">
                    @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/' . $item -> image) }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">{{ $item->created_at}}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul}}</h4>
                                <p class="text-secondary">pesantrenmodern</p>
                                <a href="/detail/{{ $item->slug}}" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="footer-berita text-center">
                    <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
                </div>
            </div>
        </section>
        <!-- end berita -->

        <!-- join -->
        <section id="join" class="py-5">
            <div class="container py-5">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="stripe me-2"></div>
                            <h5>Daftar Santri</h5>
                        </div>
                        <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabbani</h1>
                        <p class="mb-3">Pondok Pesantren Al Zatami adalah lembaga pendidikan tinggi yang menyediakan lingkungan pembelajaran Islami bagi mahasiswa. Kami memiliki visi untuk menghasilkan generasi yang tidak hanya unggul dalam ilmu pengetahuan, tetapi juga memahami dan mengamalkan nilai-nilai keislaman.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdeQVNDOvGZqJyG7GobFxn7FCR5cScsMHtXY-sQzOdleASMRg/viewform?usp=sf_link" class="btn btn-outline-danger">Registrasi</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('Assets/images/img_4.png') }}" class="foto img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end join -->

        <!-- video -->
        <section id="video" class="py-5">
            <div class="container py-5">
                <div class="text-center">
                    <!-- link i-frame -->
                    <iframe class="mainVideo" width="560" height="315" src="https://www.youtube.com/embed/t8PmjzExJUE?si=qgdZeDBv65DuiC0C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section id="video-youtube" class="py-5">
            <div class="container py-5">
                <div class="header-berita text-center ">
                    <h2 class="fw-bold">
                        Video Kegiatan Pondok Pesantren
                    </h2>
                </div>

                <div class="row py-5">
                    <div class="col-lg-4">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/G058jB7Umk0?si=aomoPM39TPPrKS7-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/t8PmjzExJUE?si=qgdZeDBv65DuiC0C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4">
                        <iframe width="100%" height="215" src="https://www.youtube.com/embed/_k7jgSn03FM?si=99bOdESjRt36CIC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- end video -->

        <!-- foto -->
        <section id="foto" class="section-foto parallax">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-putih me-2"></div>
                        <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                    </div>
                    <div>
                        <a href="" class="btn btn-outline-white">Berita Lainnya</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <a class="image-link" href="{{  asset('Assets/images/img_1.jpg') }}">
                            <img src="{{  asset('Assets/images/img_1.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <a class="image-link" href="{{  asset('Assets/images/img_2.jpg') }}">
                        <img src="{{  asset('Assets/images/img_2.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <a class="image-link">
                        <img src="{{  asset('Assets/images/img_3.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <a class="image-link" href="{{  asset('Assets/images/img_2.jpg') }}">
                        <img src="{{  asset('Assets/images/img_2.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end foto -->

        <!-- fasilitas -->
        <!-- <section id="fasilitas" class="py-5">
            <div class="container py-5">
                <div class="text-center">
                    <h3 class="fw-bold">Fasilitas Pesantren</h3>
                </div>
                
                <img src="{{ asset('Assets/il-fasisilas.svg') }}" class="img-fluid py-5" alt="">
                <div class="text-center">
                    <a href="" class="btn btn-outline-danger">Fasilitas Lainnya</a>
                </div>
            </div>
        </section> -->
        <!-- end fasilitas -->
    @endsection
    