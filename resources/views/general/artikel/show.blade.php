@extends('general.master')
@section('content')
<div class="container isidetailClbk">
<br><br><br><br>
  <div class="row">
    <div class="col p-3">
      <h1 class="fw-500">{{ $article->title }}</h1>
      <h5>Penulis: <span>{{ $article->writer }} | {{ $article->created_at }}</span></h5>
    </div>
  </div>
  <div class="row-gambar-detailClbk">
    <div class="row mx-1">
      <p>
        {{ $article->header }}
      </p>
    </div>
    
    <div class="col">
      <p>
        <img src="/img/coba.jpg">
        @php
          $body = html_entity_decode($article->body);
        @endphp
        {{!! ($body) !!}}
      </p>

      <div class="row mx-1">
        <p>
          {{ $article->footer }}
        </p>
      </div>
      <div style="clear:both;"></div>
      
      <div class="row">
        <div class="col">
          <h6>Baca juga : <a href=""></a></h6>
          <h6>Baca berikutnya</h6>
          <a href=""></a>
          <button type="button" class="btn btn-light my-3 text-success"><i class="fas fa-thumbs-up"></i> Suka</button>
          <h6>Komentar</h6>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection