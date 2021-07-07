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
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
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
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
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
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
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
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
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
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
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
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
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
@endsection