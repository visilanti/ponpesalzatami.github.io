<!-- navbar -->
<nav class="navbar navbar-expand-lg py-2 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow'}}">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('../Assets/icons/logo.png') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/detail/pondok-pesantren-al-zatami-profil-visi-dan-misi">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/berita">Berita</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Prestasi</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#foto">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#footer">Kontak</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                @else
                    <form action="/dashboard">
                        <button class="btn btn-danger">Login</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
        <!-- end navbar -->