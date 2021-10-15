@extends('general.master')
@section('title')
Artikel | TimbangNganggur
@endsection
@section('content')
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- jumbotron -->
<div class="jumbotron artikel">
    <h1>ARTIKEL</h1>
    <h3>Informasi Seputar Dunia Kerja</h3>
</div>

<!-- Filter bar  -->
<nav class="navbar-artikel">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link text-center mr-2 active" href=""><span
                    class="fw-bold">TERBARU</span></a></li>
        <li class="nav-item"><a class="nav-link text-center mr-2" href=""><span class="fw-bold">CV</span></a>
        </li>
        <li class="nav-item"><a class="nav-link text-center mr-2" href=""><span
                    class="fw-bold">INTERVIEW</span></a></li>
        <li class="nav-item"><a class="nav-link text-center mr-2" href=""><span
                    class="fw-bold">KONTEN</span></a></li>
    </ul>
    <form class="form-inline">
        <input class="form" type="search" placeholder="Search" aria-label="Search">
        <button type="button" class="btn"><i class="fas fa-search"></i></button>
    </form>
</nav>

<div class="container artikel">
    <div class="row">
        <div class="col-md-12 d-flex flex-wrap">

            @foreach ($articles as $article)
            <a href="{{ route('artikel.show', ['artikel' => $article->slug]) }}">
                <div class="card">
                    <img class="card-img" src="{{ asset('images/artikel/'.$article->image_url)}}" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <div class="card-bottom">
                            <p class="card-count"><i class="far fa-eye"></i> {{ $article->view_count }}</p>
                            <p class="card-tag">{{ $article->tag }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div>{{ $articles->links() }}</div>
</div>
@endsection
