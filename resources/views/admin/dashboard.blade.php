@extends('admin.main')
@section('title')
    Dashboard
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
{{-- @foreach ($articles as $article) --}}
<section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <img class="d-block mx-auto mb-4" src="{{ asset("img/ayoMakaryo/ayoMakaryo.png") }}" alt="" width="72" height="72">
                                    </div>

                                    <h2 class="card-category">Info Loker</h2>
                                    <h3 class="card-title">{{ $jobs->count()}} Info Loker</h3>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <img class="d-block mx-auto mb-4" src="{{ asset("img/artikel/konten.png") }}" alt="" width="72" height="72">
                                    </div>
                                    <h2 class="card-category">Artikel</h2>
                                    <h3 class="card-title">{{ $articles->count() }} Artikel</h3>
                                </div>

                                </div>
                            </div>
                        </div>
                    </section>
{{-- @endforeach --}}
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
