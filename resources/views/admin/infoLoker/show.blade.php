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
              <h1>Info Loker</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Info Loker</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.info-loker.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pekerjaan Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="judul">Nama Pekerjaan</label>
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Masukkan nama pekerjaan" value="{{ $job->name }}" disabled><br>        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="judul">Gaji</label>
                                        <input class="form-control" type="text" name="salary" id="salary" value="{{ $job->salary }}" disabled><br>        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="type">Jenis Pekerjaan</label>
                                    <input class="form-control" type="text" name="type" id="type" value="{{ $job->type }}" disabled><br>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="companies">Perusahaan</label>
                                    
                                    <select name="companies_id" class="form-control select2" style="width: 100%;" disabled>
                                        @if ($companies->count() > 0)
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                            @endforeach
                                        @else
                                            <option>Tunggu...</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea class="form-control" type="text" name="description" id="description" disabled>{{ $job->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="qualification">Kualifikasi</label>
                                        <textarea class="form-control" type="text" name="qualification" id="qualification" disabled>{{ $job->qualification }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Skill yang diperlukan</label>
                                        
                                          <ul>
                                          @foreach ($skills as $skill)
                                            <li value="{{ $skill->id }}">{{ $skill->name }}</li>
                                          @endforeach
                                          </ul>
                                      </div>
                                </div>
                            </div>
                        <div class="card-footer">
                            <a href="{{ URL::to('admin/info-loker') }}" class="btn btn-outline-info">Kembali</a>
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