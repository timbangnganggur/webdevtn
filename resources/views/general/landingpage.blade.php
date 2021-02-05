@extends('general.master')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      <div class="pencarian">
        <input class="form-block mr-sm-2 cari" type="search" placeholder="Cari Lowongan Kerja" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </div> <!--Akhir Hero-->

  <section id="ayo-sinau">
    <div class="section-judul">
      <h2>AYO SINAU</h2>
      <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 250px; height: 2px;">
    </div>

  <div class="owl-carousel owl-theme">
    <div class="item"><img class="gambar-carousel" src="img/Cpns.png" alt=""><h2>CPNS</h2></div>
    <div class="item"><img class="gambar-carousel" src="img/magang.png" alt=""><h2>MAGANG</h2> <a href="#">Join</a></div>
    <div class="item"><img src="img/freelance.png" alt=""><h2>FREELANCER</h2></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
  </div>  
  <button type="button" role="presentation" class="btn-next disabled fas fa-angle-right"></button>
  </section>    
@endsection