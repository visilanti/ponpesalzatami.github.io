@extends('layouts.layout')
@section('content')
    <!-- berita -->
    <section id="berita" class="py-5">
            <div class="container">

                <div class="header-berita text-center" style="margin-top: 100px">
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
                                <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end berita -->
@endsection