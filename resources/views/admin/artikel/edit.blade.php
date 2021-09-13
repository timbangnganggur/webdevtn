@extends('admin.main')
@section('title')
    Artikel
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Artikel</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Artikel</li>
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
                  Edit Artikel Disini
                  <small>Simple Article Editor</small>
                </h3>
                <!-- tools box -->
                <div class="card-tools">
                    {{--  --}}
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
                <form action="{{ URL::to('admin/artikel/'.$article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body pad">
                        <div class="form-group">
                          <label class="form-label">Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Tuliskan title artikel" value="{{$article->title}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Header</label>
                            <input type="text" name="header" class="form-control" placeholder="Tuliskan header tambahan"  value="{{$article->header}}" required/>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Image Upload</label>
                            <input type="file" name="image" class="form-control" name="image" >
                            <img src="{{ asset('images/artikel/'.$article->image_url) }}">
                        </div>
                        <div class="my-3">
                            <label class="form-label">Body</label>
                            <textarea name="body" class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$article->body}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Footer</label>
                            <input type="text" name="footer" class="form-control" placeholder="Tuliskan footer tambahan" value="{{$article->footer}}" required/>
                        </div>
                        <div class="form-group row">
                          <div class="col">
                            <label class="form-label">Tag</label>
                            <input type="text" name="tag" class="form-control" placeholder="Tuliskan topik yang berkaitan dengan hal ini (ex: kerja, menarik, fulltime, tips) ..." value="{{$article->tag}}"  required/>
                          </div>
                        </div>
                        <p class="text-sm mb-0">
                            Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                            information.</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100">Simpan Artikel</button>
                    </div>
                </form>
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
