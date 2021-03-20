@extends('general.master')
@section('content')


<div class="container profileTN">
  <section class="sectionLogo">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('img/Logo.png') }}" alt="">
      </div>
      <div class="col-md-6">
        <p>Timbang Nganggur adalah platform untuk membantu para pencari kerja dalam meningkatakn kualitas dirinya, melalui konten kreatif edukatif seputar dunia kerja yang dikemas secara ringkas. Timbang Nganggur juga memberikan informasi lowongan kerja aktual, baik Full Time, Part Time hingga internship yang tersedia di seluruh wilayah Indonesia</p>
      </div>
    </div>
  </section>

  <div class="section1">
    <div class="row">
      <div class="col-md-6 col-sect1">
        <h4>VISI</h4>
        <p>Membantu mengurangi pengangguran melalui konten edukatif berisi pembelajaran dan gambaran kerja untuk sebagai bekal para pencari kerja</p>

        <h4>MISI</h4>
        <p>Menjadi perusahaan pengembangan karir anak muda Indonesia nomor 1 dengan fokus mengurangi pengangguran dengan cara membuat anak muda Indonesia lebih siap soft skill & hard skill untuk masuk ke dunia kerja</p>
      </div>
      <div class="col-md-6">
        <img src="/img/ikon visi misi.png" alt="">
      </div>
    </div>
  </div>

  <section class="section2">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
          <h1>PRODUCT</h1>

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/ikon Ayo Makryo.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/img/gambar di ikon CLBK.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></i></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>




</div>
<!--Akhir Container-->








@endsection