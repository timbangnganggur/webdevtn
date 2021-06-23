@extends('admin.main')
@section('dataTablesCSS')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('title')
    Artikel
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Artikel</h3>
                <div class="card-tools">
                  <a href="{{ url('admin/artikel/create') }}" class="btn btn-tool">
                      <i class="fa fa-plus"></i>
                      &nbsp; Tambah Data Baru
                  </a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Tags</th>
                    <th>Writer</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($articles as $article)
                    <tr>
                      <td>{{ $article->title }}</td>
                        <td>
                            @foreach (explode(',', $article->tag) as $tag)
                            <span class="m-1 badge bg-primary">{{ $tag }}</span>
                            @endforeach
                        </td>
                      <td>{{ $article->writer }}</td>

                      <td class="text-center">
                        <form method="POST" action="{{ URL::to('admin/artikel/'.$article->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" />
                            <div class="btn-group">
                                {{-- <a class="btn btn-info" href="{{ URL::to('admin/info-loker/'.$company->id) }}"><i class="fa fa-eye"></i></a> --}}
                                {{-- <a class="btn btn-success" href="{{ $company->id }}" title="Ubah Data Perusahaan"><i class="fa fa-magic" aria-hidden="true"></i></a> --}}
                                <button title="Hapus Data Artikel" onclick="confirmDelete()" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </div>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Title</th>
                    <th>Tags</th>
                    <th>Writer</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('dataTablesScript')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
@endsection
@section('script')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection