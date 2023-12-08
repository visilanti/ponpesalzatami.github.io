@extends('layouts.layout')
@section('content')
    <!-- berita -->
    <section id="berita" class="py-5">
            <div class="container">

                <div class="header-berita text-center py-5">
                    <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
                </div>

                <div class="row py-5">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('Assets/images/img_1.jpg') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">21/08/20203</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al-Zatami</h4>
                                <p class="text-secondary">pesantrenmodern</p>
                                <a href="/detail" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('Assets/images/img_2.jpg') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">21/08/20203</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al-Zatami</h4>
                                <p class="text-secondary">pesantrenmodern</p>
                                <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('Assets/images/img_3.jpg') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">21/08/20203</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al-Zatami</h4>
                                <p class="text-secondary">pesantrenmodern</p>
                                <a href="/detail" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end berita -->
@endsection