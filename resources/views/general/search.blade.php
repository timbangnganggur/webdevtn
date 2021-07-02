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
    <form action="{{ route('search') }}" method="GET">
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
</form>
<!--Akhir Hero-->
@if($Jobs->isNotEmpty())
    @foreach ($Jobs as $Job)
        <div class="post-list">
            <p>{{ $Job->name }}</p>
        </div>
    @endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif

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

@if (!Auth::check())
        <!-- Awal Modal Masuk-->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row p-3">
                      <div class="col-10 m-auto">
                        <div class="form-group">
                          <label class="form-label" for="exampleInputUsername">Username</label>
                          <input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernamelHelp">
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="exampleInputPassword">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword">
                        </div>
                        <div class="form-group form-check">
                          <small><a href="#">*Forgot password?</a></small>
                        </div>
                        <div class="col m-auto">
                          <div class="d-grid gap-2 m-auto">
                            <button type="submit" class="btn btn-block btn-success">Masuk</button>
                            <div class="row m-auto">
                              <span class="fw-bold">atau</span>
                            </div>
                            <button type="submit" class="btn btn-block btn-warning"><i class="fab google fa-google"></i>Masuk dengan google</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Awal Modal Daftar-->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">Daftar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="depan">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputNamaBelakang">.</label>
                        <input type="text" class="form-control" id="inputNamaBelakang" placeholder="belakang">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputCity">Tanggal Lahir</label>
                        <select id="inputState" class="form-control">
                          <option selected>Tanggal</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">.</label>
                        <select id="inputState" class="form-control">
                          <option selected>Bulan</option>
                          <option>Januari</option>
                          <option>Februari</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">.</label>
                        <select id="inputState" class="form-control">
                          <option selected>Tahun</option>
                          <option>1999</option>
                          <option>2000</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputUsername">Username</label>
                      <input type="text" class="form-control" id="inputUsername" placeholder="username">
                      <small>min. 6 karakter</small>
                    </div>
                    <div class="form-group">
                      <label for="inputNomor">No. Hp</label>
                      <input type="text" class="form-control" id="inputNomor" placeholder="+62 ">
                    </div>
                    <div class="form-group">
                      <label for="inputInstagram">Instagram</label>
                      <input type="text" class="form-control" id="inputInstagram">
                    </div>
                    <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="text" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword">Password</label>
                      <input type="password" class="form-control" id="inputPassword">
                      <small>min. 8 karakter</small>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword2">Ulangi Password</label>
                      <input type="password" class="form-control" id="inputPassword2">
                    </div>
                    <div class="modal-footer">
                      <div class="col m-auto">
                        <div class="d-grid gap-2 m-auto">
                          <button type="submit" class="btn btn-block btn-success">Daftar</button>
                        </div>
                      </div>
                     </div>
                  </form>
                </div>
              </div>
            </div>
          </div>   
        @else
          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  Apakah Anda yakin ingin logout?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                  <button type="submit" class="btn btn-primary" onclick="document.getElementById('logout').submit();">Ya</button>
                  <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endif

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
