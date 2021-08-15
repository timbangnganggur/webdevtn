@extends('general.master')
@section('content')

<div class="container pembungkusCLBK">
  <br><br><br>
  <h3 class="m-3 fw-bold">CLBK</h3>
  <div class="row">
    <div class="col-md-12 d-flex flex-wrap">
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 d-flex flex-row-reverse">
      <nav aria-label="Page navigation example" class="paging-clbk">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>

    <!-- <div class="container pembungkusCLBK">
    <br><br><br> -->
        <!-- <div class="row rowAtas mt-5">
            <div class="col-md-7">
                <h1>Topik</h1>
                 <ul>
                    <li class="topik1 topik"><a href="#">TIPS & TRIC</a></li>
                    <li class="topik2 topik"><a href="#">FRESH GRADUATE</a></li>
                    <li class="topik3 topik"><a href="#">MERINTIS KARIR</a></li>
                </ul>
            </div>

            <div class="col-md-5">
                <form class="form-artikelClbk">
                    <input class="search-artikel" type="text" placeholder="Cari Artikel" required>	
                    <button class="submit-btn"> <i class="fas fa-search"></i> </button>
                  </form>
            </div>
        </div> -->
        
        <!-- <div class="row rowBawah">
            <ul>
                <li class="topik4 topik"><a href="#">BIDANG KERJA</a></li>
                <li class="topik5 topik"><a href="#">DUNIA KERJA</a></li>
            </ul>
        </div> -->
            <!-- </div> Akhir col-kiri-clbk -->

            <!-- <div class="col-md-4 col-kanan-clbk">
              <h3><i class="far fa-heart"></i>Terfavorit</h3>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/coba2.jpg" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h5>
                      <p class="card-text">Topik</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/coba2.jpg" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h5>
                      <p class="card-text">Topik</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="/img/coba2.jpg" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('detailClbk', ['id' => 1]) }}">Judul</a></h5>
                      <p class="card-text">Topik</p>
                    </div>
                  </div>
                </div>
              </div>

            </div> -->
            <!--Akhir col-kanan-clbk-->

        <!-- </div> -->
         

    
    
      <!-- </div> Akhir Container -->
        
        


@endsection