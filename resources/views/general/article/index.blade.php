
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
    <div class="pencarian">
      <div class="row d-flex text-start">
        <div class="col input-group">
          <input class="col-lg-8 offset-lg-1 col-md-6 offset-md-2 form-control" type="search" placeholder="Cari Lowongan Kerja" aria-label="Search">
          <button class="col-lg-2 btn btn-danger" style="border-radius: 0;" type="submit"><i class="fas fa-search"></i> <span class="fw-bold">Cari</span></button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Akhir Hero-->


@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    
  	<ul class="list-group">
	  <li class="list-group-item">Cras justo odio</li>
	  <li class="list-group-item">Dapibus ac facilisis in</li>
	  <li class="list-group-item">Morbi leo risus</li>
	  <li class="list-group-item">Porta ac consectetur ac</li>
	  <li class="list-group-item">Vestibulum at eros</li>
	</ul>

  </div>
</div>
@endsection