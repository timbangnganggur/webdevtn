@extends('general.master')
@section('title')
    Timbangnganggur | Website Informatif & Edukatif untuk Persiapan Diri di Dunia Kerja
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('img/image-hero.png') }}');">
  <div class="container">
    <br><br><br> <br><br><br> 
    <h1 class="text-center">Informatif & Edukatif untuk Persiapan Diri di Dunia Kerja</h1>
    <br><br><br>
    <form action="{{ route('ayoMakaryo') }}" method="GET">
    <div class="pencarian">
      <div class="row d-flex text-start">
        <div class="col input-group">
          <input class="col-lg-8 offset-lg-1 col-md-6 offset-md-2 form-control" type="search" placeholder="Cari Lowongan Kerja" aria-label="Search" name="q">
          <button class="col-lg-2 btn btn-danger" style="border-radius: 0;" type="submit"><i class="fas fa-search"></i> <span class="fw-bold">Cari</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<!--Akhir Hero-->

<section id="main">
    <div class="card mx-2 my-4" style="border: none;">
      <div class="card-body" style="background-color: rgba(244, 241, 222, 1);">
        <h5 class="card-title text-center">Cangkruk Langsung Bahas Kerjoan</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">CLBK</h6>
        <div id="splide" class="splide">
          <div class="splide__track d-flex">
            <ul class="splide__list">
              <li class="splide__slide" style="min-width:250px;">
                <div class="card m-3 ">
                  <img class="card-img-top" src="{{ asset('img/clbk/ig-1.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
                  </div>
                </div>
              </li>
              <li class="splide__slide" style="min-width:250px;">
                <div class="card m-3 ">
                  <img class="card-img-top" src="{{ asset('img/clbk/ig-2.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
                  </div>
                </div>
              </li>
              <li class="splide__slide" style="min-width:250px;">
                <div class="card m-3 ">
                  <img class="card-img-top" src="{{ asset('img/clbk/ig-3.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
                  </div>
                </div>
              </li>
              <li class="splide__slide" style="min-width:250px;">
                <div class="card m-3 ">
                  <img class="card-img-top" src="{{ asset('img/clbk/ig-4.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
                  </div>
                </div>
              </li>
              <li class="splide__slide" style="min-width:250px;">
                <div class="card m-3 ">
                  <img class="card-img-top" src="{{ asset('img/clbk/ig-5.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="splide__progress">
          <div class="splide__progress__bar">
          </div>
        </div>
      </div>
    </div>

    <div class="card mx-2 my-4" style="border: none;">
      <div class="card-body" style="background-color: rgba(244, 241, 222, 1);">
        <h5 class="card-title text-center">Artikel</h5>
        <h6 class="card-subtitle mb-2 text-muted text-center">Artikel</h6>
        <div id="splide-artikel" class="splide">
          <div class="splide__track d-flex">
            <ul class="splide__list"> 
                @foreach($article as $article)
              <li class="splide__slide" style="min-width:250px;" >
                <div class="card m-3 ">
                  <img src="{{$article->image_url}}" class="img-thumbnail">
                  <div class="card-body">
                    <p class="card-text"><a href="{{ route('artikel.show', ['artikel' => $article->slug]) }}">{{ $article->title }}</a></p>
                    <p>by ({{ $article->writer }})</p>
                    <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small></p>
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
  new Splide( '#splide', {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      autoplay: true,
  } ).mount();
  new Splide( '#splide-artikel', {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      autoplay: true,
  } ).mount();
}else{
  new Splide( '#splide', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      autoplay: true,
  } ).mount();
  new Splide( '#splide-artikel', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      autoplay: true,
  } ).mount();
}

// When browser resized
$(window).resize(function() {
if (navigator.userAgent.match(/Mobile/)) {
  new Splide( '#splide', {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      autoplay: true,
  } ).mount();
  new Splide( '#splide-artikel', {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      autoplay: true,
  } ).mount();
}else{
  new Splide( '#splide', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      autoplay: true,
  } ).mount();
  new Splide( '#splide-artikel', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      autoplay: true,
  } ).mount();
}
});
</script>
@endsection
