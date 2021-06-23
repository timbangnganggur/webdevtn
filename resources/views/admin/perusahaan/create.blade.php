@extends('admin.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('./plugins/select2/css/select2.min.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Perusahaan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Perusahaan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.perusahaan.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Perusahaan Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="judul">Nama Perusahaan</label>
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Masukkan nama pekerjaan"><br>        
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="region">Daerah/Alamat Perusahaan</label>
                                        <select name="regions_id" class="form-control select2" style="width: 100%;">
                                            @if ($regions->count() > 0)
                                                @foreach ($regions as $region)
                                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                                @endforeach
                                            @else
                                                <option>Tunggu...</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer">
                            <a href="{{ URL::to('admin/perusahaan') }}" class="btn btn-outline-info">Kembali</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{ asset('./plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
@endsection