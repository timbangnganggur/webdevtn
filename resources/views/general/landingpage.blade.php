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
                <input class="form-control" type="search"
                    placeholder="Cari Lowongan Kerja" aria-label="Search" name="q">
                <button class="btn-search" type="submit"><i class="fas fa-search"></i> <span>Cari</span></button>
            </div>
        </form>
    </div>
</div>
<!--Akhir Hero-->

<section id="main">
    <div class="card mx-2 my-4" style="border: none;">
        <div class="card-body" style="background-color: rgba(244, 241, 222, 1);">
            <h5 class="card-title text-center">Artikel</h5>
            <h6 class="card-subtitle mb-2 text-muted text-center">Artikel</h6>
            <div id="splide-artikel" class="splide">
                <div class="splide__track d-flex">
                    <ul class="splide__list">
                        @foreach($articles as $article)
                        <li class="splide__slide" style="min-width:250px;">
                            <div class="card m-3 h-100">
                                <img src="{{ asset('images/artikel/'.$article->image_url)}}" class="img-thumbnail">
                                <div class="card-body">
                                    <p class="card-text"><a
                                            href="{{ route('artikel.show', ['artikel' => $article->slug]) }}">{{ $article->title }}</a>
                                    </p>
                                    <p>by ({{ $article->writer }})</p>
                                    <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small>
                                    </p>
                                    <p>Views: {{ $article->view_count }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="splide__progress">
                <div class="splide__progress__bar">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
    if (navigator.userAgent.match(/Mobile/)) {
        new Splide('#splide-artikel', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            autoplay: true,
        }).mount();
    } else {
        new Splide('#splide-artikel', {
            type: 'loop',
            perPage: 5,
            perMove: 1,
            autoplay: true,
        }).mount();
    }

    // When browser resized
    $(window).resize(function () {
        if (navigator.userAgent.match(/Mobile/)) {
            new Splide('#splide-artikel', {
                type: 'loop',
                perPage: 1,
                perMove: 1,
                autoplay: true,
            }).mount();
        } else {
            new Splide('#splide-artikel', {
                type: 'loop',
                perPage: 5,
                perMove: 1,
                autoplay: true,
            }).mount();
        }
    });

</script>
@endsection
