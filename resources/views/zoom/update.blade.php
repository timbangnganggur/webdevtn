@extends('general.master')
@section('title')
    Edit zoom
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
<div class="mh-100" style="height: 100px;"></div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Zoom</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Zoom</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    @include('admin.alert.error')
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Buat Zoom Baru Disini
                  <small>Simple Zoom Editor</small>
                </h3>
                <!-- tools box -->
                <div class="card-tools">
                    {{--  --}}
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              @foreach($response['meetings'] as $response)
                <form action="{{ url('api/meetings-update/'.$response['id']) }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="card-body pad">
                        <div class="form-group">
                          <label class="form-label">topic</label>
                          <input type="text" name="topic" class="form-control" placeholder="Tuliskan topic zoom" >
                        </div>
                        <div class="form-group">
                            <label class="form-label">start_time</label>
                            <input type="date" name="start_time" class="form-control" placeholder="Tuliskan start_time" >
                        </div>
                        <div class="form-group">
                            <label class="form-label">agenda</label>
                            <input type="text" name="agenda" class="form-control" placeholder="Tuliskan agenda">
                        </div>
                        <p class="text-sm mb-0">
                            Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                            information.</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100">Simpan Zoom</button>
                    </div>
                </form>
                @endforeach
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
</div>
@endsection
@section('script')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    $('.textarea').summernote()
  })
</script>
@endsection
