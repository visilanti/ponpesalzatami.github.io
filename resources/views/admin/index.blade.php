@extends('layouts.layout')

@section('content')
<section style="margin-top: 100px"> <div class="container col-xxl-8 py-5"> <h3 class="fw-bold mb-2">Halaman Dashboard
    Admin</h3>
    <p>Selamat Datang di Halaman Dashboard Admin</p>

    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow-sm rounded-3 border-0">
                <img src="{{ asset('Assets\il-berita-01.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blog Artikel</h5>
                    <p class="card-text">
                        Atur kelola artikel kegiatan pesantren</p>
                    <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm rounded-3 border-0">
                <img src="{{ asset('Assets\images\img_1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Photo Kegiatan</h5>
                    <p class="card-text">
                        Atur kelola photo kegiatan pesantren</p>
                    <a href="{{ route('photo')}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection