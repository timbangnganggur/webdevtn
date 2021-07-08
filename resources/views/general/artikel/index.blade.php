@extends('general.master')
@section('content')
<div class="container pembungkusCLBK">
  <br><br><br>
  <h3 class="m-3 fw-bold">Artikel</h3>
  <div class="row">
    <div class="col-md-12 d-flex flex-wrap">
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