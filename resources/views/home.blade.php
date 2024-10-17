@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')
<h1>Selamat datang, <span class="text-primary">Ihsan Maulana</span></h1>

<div class="navbar bg-body-tertiary mt-3">
    <div class="container-fluid">
        <form class="d-flex w-100" role="search">
            <input class="form-control me-2 flex-grow-1" type="search" placeholder="Cari layanan atau artikel kesehatan..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>

<div class="container mt-3">
    <h1 class="mb-3">Layanan Utama</h1>
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <div class="rounded-circle mb-2 border border-primary d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="fas fa-video fa-lg text-primary"></i>
                    </div>
                    <h5 class="card-title">Konsultasi Online</h5>
                    <p class="card-text">Konsultasi dengan dokter melalui video call</p>
                </div>
            </div>
        </div>

        <div class="col text-center">
            <div class="card">
                <div class="card-body">
                    <div class="rounded-circle mb-2 border border-success d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="fas fa-brain fa-lg text-success"></i>
                    </div>
                    <h5 class="card-title">Tes Psikologi</h5>
                    <p class="card-text">Pemeriksaan psikolog dan tes lainnya</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <h1>Artikel Kesehatan</h1>
    </div>
    <div class="row mt-3">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/400/200?random=1" class="card-img-top" alt="Artikel 1">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel 1</h5>
                    <p class="card-text">Deskripsi singkat artikel tentang rincian berita didalam artikel</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/400/200?random=2" class="card-img-top" alt="Artikel 2">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel 2</h5>
                    <p class="card-text">Deskripsi singkat artikel tentang rincian berita didalam artikel</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/400/200?random=3" class="card-img-top" alt="Artikel 3">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel 3</h5>
                    <p class="card-text">Deskripsi singkat artikel tentang rincian berita didalam artikel</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/400/200?random=4" class="card-img-top" alt="Artikel 4">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel 4</h5>
                    <p class="card-text">Deskripsi singkat artikel tentang rincian berita didalam artikel</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/400/200?random=5" class="card-img-top" alt="Artikel 5">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel 5</h5>
                    <p class="card-text">Deskripsi singkat artikel tentang rincian berita didalam artikel</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://picsum.photos/400/200?random=6" class="card-img-top" alt="Artikel 6">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel 6</h5>
                    <p class="card-text">Deskripsi singkat artikel tentang rincian berita didalam artikel</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection