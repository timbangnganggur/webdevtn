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
                <form action="{{ URL::to('admin/info-loker/'.$job->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Pekerjaan Baru</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="judul">Nama Pekerjaan</label>
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Masukkan nama pekerjaan" value="{{ $job->name}}"><br>        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="judul">Gaji</label>
                                        <input class="form-control" type="number" name="salary" id="salary" placeholder="Masukkan nama pekerjaan" value="{{ $job->salary}}"><br>        
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="type">Jenis Pekerjaan</label>
                                    <select name="type" class="form-control" style="width: 100%;">
                                        <option value="1">Part Time</option>
                                        <option value="2">Full Time</option>
                                        <option value="3">Internship</option>
                                        <option value="4">Apprentice</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="companies">Perusahaan</label>
                                    <select name="companies_id" class="form-control select2" style="width: 100%;">
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
                                        <textarea name="description" placeholder="Masukkan deskripsi" class="form-control">{{ $job->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="qualification">Kualifikasi</label>
                                        <textarea name="qualification" placeholder="Masukkan kualifikasi" class="form-control">{{ $job->qualification}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Skill yang diperlukan</label>
                                        <select name="skills_jobs_id[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                          @foreach ($skills as $skill)
                                              <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                          @endforeach
                                        </select>
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