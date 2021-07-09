@extends('general.master')
@section('title')
    Artikel | TimbangNganggur
@endsection
@section('content')
<div class="container">
    <div class="mt-5 pt-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset("img/artikel/konten.png") }}" alt="" width="72" height="72">
        <h2>Artikel</h2>
        <p class="lead">Informasi Seputar Dunia Kerja</p>
      </div>
</div>
<div class="container pembungkusCLBK">
  <div class="row">
    <div class="col-md-12 d-flex flex-wrap">
<<<<<<< HEAD
      <div class="col-sm-4">
        <div class="card">
          <img src="/img/card-image.jpg" alt="">
          <div class="card-body">
            <h5 class="card-title">Topik</h5>
            <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => 1]) }}">Judul</a></h4>
            <p>by (penulis)</p>
            <p>Tanggal terbit</p>
            <div class="panel-footer">
                Views: 
            </div>
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
            <div class="panel-footer">
                Views:
            </div>
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
            <div class="panel-footer">
                Views:
            </div>
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
            <div class="panel-footer">
                Views:
            </div>
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
            <div class="panel-footer">
                Views:
            </div>
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
            <div class="panel-footer">
                Views:
            </div>
          </div>
        </div>
      </div>
=======
      @foreach ($articles as $article)
        <div class="col-sm-4">
          <div class="card h-100">
            <img src="/img/card-image.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title">Topik</h5>
              <h4 class="card-text"><a href="{{ route('artikel.show', ['artikel' => $article->slug]) }}">{{ $article->title }}</a></h4>
              <p>by ({{ $article->writer }})</p>
              <p>{{ $article->created_at }}</p>
            </div>
          </div>
        </div>
      @endforeach
>>>>>>> 55a86e1837ef0740eea78ae7090cb4e051f617c6
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