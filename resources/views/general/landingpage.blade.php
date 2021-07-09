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
    <div class="card m-2">
      <div class="card-body">
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
</section>

<!-- <section id="ayo-sinau" style="height: 100%">
  <div class="row m-0 p-0 text-center">
    <div class="col-lg-12 m-0 p-0 clbk-tag">
      <h2>
        <b>CLBK</b>
      </h2>
      <span style="font-size: 12pt">: CANGKRUK LANGSUNG BAHAS KERJOAN</span>
    </div>
    <div class="col-lg-12 m-0 p-0">
      <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 30%; height: 2px;">
    </div>
  </div>

  <div class="owl-carousel owl-theme">
    <div class="item">
      <a href="#"><img class="gambar-carousel" src="img/Tips.png" alt=""></a>

      <h2>Tips & Trick</h2>
    </div>
    <div class="item">
      <a href="#"><img class="gambar-carousel" src="img/MK.png" alt=""></a>
      
      <h2>Merintis Karir</h2>
    </div>
    <div class="item">
      <a href="#"><img src="img/DK.png" alt=""></a>
      
      <h2>Dunia Kerja</h2>
    </div>
  </div>
  {{-- <button type="button" role="presentation" class="btn-next disabled fas fa-angle-right"></button> --}}
</section> -->
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
}else{
      new Splide( '#splide', {
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
}else{
      new Splide( '#splide', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      autoplay: true,
  } ).mount();
}
});
</script>
@endsection
