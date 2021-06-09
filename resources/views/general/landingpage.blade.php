@extends('general.master')
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