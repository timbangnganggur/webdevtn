@extends('general.master')
@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: {{ asset('img/jumbotron1.png') }}">
  <div class="container">
    <br><br><br> <br><br><br> <br><br><br>
    <!-- <h1 class="display-4">Fluid jumbotron</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
    <div class="pencarian ">
      <input class="form-block mr-sm-2 cari" type="search" placeholder="Cari Lowongan Kerja" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </div>
  </div>
</div>
<!--Akhir Hero-->

<section id="ayo-sinau">
  <div class="section-judul">
    <!-- <span id="clbk">: CANGKRUK LANGSUNG BAHAS KERJOAN</span> -->
    <h2><b>CLBK</b> <span id="clbk">: CANGKRUK LANGSUNG BAHAS KERJOAN</span></h2>
    <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 300px; height: 2px;">
  </div>

  <div class="owl-carousel owl-theme">
    <div class="item"><img class="gambar-carousel" src="img/Tips.png" alt="">
      <h2>Tips & Trick</h2>
    </div>
    <div class="item"><img class="gambar-carousel" src="img/MK.png" alt="">
      <h2>Merintis Karir</h2>
    </div>
    <div class="item"><img src="img/DK.png" alt="">
      <h2>Dunia Kerja</h2>
    </div>
    <div class="item">
      <h4>4</h4>
    </div>
    <div class="item">
      <h4>5</h4>
    </div>
    <div class="item">
      <h4>6</h4>
    </div>
  </div>
  <button type="button" role="presentation" class="btn-next disabled fas fa-angle-right"></button>
</section>

@endsection