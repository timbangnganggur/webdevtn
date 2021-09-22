@extends('general.master')
@section('title')
Timbangnganggur | Website Informatif & Edukatif untuk Persiapan Diri di Dunia Kerja
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Informatif & Edukatif untuk Persiapan Diri di Dunia Kerja</h1>

        <form action="{{ route('ayoMakaryo') }}" method="GET">
            <div class="pencarian">
                <input class="form-control" type="search" placeholder="Cari Lowongan Kerja" aria-label="Search"
                    name="q">
                <button class="btn-search" type="submit"><i class="fas fa-search"></i> <span>Cari</span></button>
            </div>
        </form>
    </div>
</div>
<!--Akhir Hero-->

<section id="main">

    <!-- JELAJAHI ARTIKEL  -->
    <div class="jelajah-artikel">
        <h5 class="judul-section text-center">Jelajahi Artikel</h5>
        <h6 class="subjudul-section text-center">Dapatkan Inspirasi untuk mengembangkan karirmu</h6>
        <div class="card-body">
            <a href="">
                <div class="card">
                    <img class="card-img-top" src="../img/berita.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Berita seputar dunia terupdate</h5>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img class="card-img-top" src="../img/cv-hack.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">CV Hack</h5>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img class="card-img-top" src="../img/interview.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Interview Skill</h5>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <img class="card-img-top" src="../img/artikel/konten.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Konten bermanfaat</h5>
                    </div>
                </div>
            </a>


        </div>
    </div>

    <!-- ARTIKEL POPULER  -->
    <div class="artikel-populer card-body">
        <h5 class="judul-section text-center">Artikel</h5>
        <h6 class="subjudul-section text-center">Artikel</h6>
        <div id="splide-artikel" class="splide">
            <div class="splide__track d-flex">
                <ul class="splide__list">
                    @foreach($articles as $article)
                    <li class="splide__slide">
                        <a href="{{ route('artikel.show', ['artikel' => $article->slug]) }}">
                            <div class="card">
                                <img class="card-img" src="{{ asset('images/artikel/'.$article->image_url)}}"
                                    alt="Card image">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <div class="card-bottom">
                                        <p class="card-count"><i class="far fa-eye"></i> {{ $article->view_count }}</p>
                                        <p class="card-tag">{{ $article->tag }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    new Splide('#splide-artikel', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        autoplay: true,
        pagination: false,
        breakpoints: {
            1088: {
                perPage: 1,
            }
        }
    }).mount();
    


</script>
@endsection
