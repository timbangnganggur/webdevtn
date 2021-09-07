@extends('general.master')
@section('title')
    Artikel | TimbangNganggur
@endsection
@section('content')
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="mt-5 pt-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset("img/artikel/konten.png") }}" alt="" width="72" height="72">
        <h2>Artikel</h2>
        <p class="lead">Informasi Seputar Dunia Kerja</p>
      </div>
</div>
<div class="container pembungkusCLBK">
  <div class="row">
    <div class="col-md-12 d-flex flex-wrap">

      @foreach ($articles as $article)
        <div class="col-sm-4">
          <div class="card h-100">
            <img src="/img/card-image.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Topik</h5>
              <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => $article->slug]) }}">{{ $article->title }}</a></h4>
              <p>by ({{ $article->writer }})</p>
              <p>{{ $article->created_at }}</p>
              <p>Views: {{ $article->view_count }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
    <div class="d-flex justify-content-center">
  <div>{{ $articles->links() }}</div>
    </div>
@endsection