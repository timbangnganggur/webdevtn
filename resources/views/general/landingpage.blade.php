@extends('general.master')
@section('title')
    Timbangnganggur | Website Informatif & Edukatif untuk Persiapan Diri di Dunia Kerja
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('img/jumbotron.png') }}'); height: 567px; background-size: auto;">
  <div class="container">
    <br><br><br> <br><br><br> 
    <h1 class="text-center">Informatif & Edukatif untuk Persiapan Diri di Dunia Kerja</h1>
    <br><br><br>
    <div class="pencarian">
      <div class="row d-flex justify-content-center">
        <input class="col-lg-9 col-md-10 mx-1 my-1 form-block cari" type="search" placeholder="Cari Lowongan Kerja" aria-label="Search">
        <button class="col-lg-1 col-md-10 mx-1 my-1 btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </div>
</div>
<!--Akhir Hero-->

<section id="main">
  <div id="splide" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="card m-3 h-100">
              <img class="card-img-top" src="{{ asset('img/clbk/ig-1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">5 Jenis Psikotes Kerja</h5>
                <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="card m-3 h-100">
              <img class="card-img-top" src="{{ asset('img/clbk/ig-2.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hal - Hal Sepele yang Dijamin Bikin Kamu Ditolak Waktu Interview</h5>
                <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="card m-3 h-100">
              <img class="card-img-top" src="{{ asset('img/clbk/ig-3.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Tips Menuliskan Pengalaman Kerja di CV</h5>
                <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="card m-3 h-100">
              <img class="card-img-top" src="{{ asset('img/clbk/ig-4.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">CV & Cover Letter Apa Bedanya?</h5>
                <p class="card-text"><small class="text-muted">Diperbaharui pada 12 Juni 2021</small></p>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div class="card m-3 h-100">
              <img class="card-img-top" src="{{ asset('img/clbk/ig-5.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Perisapan Interview Online Check!</h5>
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

<div style="height: 200px;"></div>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
  new Splide( '#splide', {
      type   : 'loop',
      perPage: 5,
      perMove: 1,
      autoplay: true,
  } ).mount();
</script>
@endsection