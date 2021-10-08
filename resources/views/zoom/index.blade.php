@extends('general.master')
@section('dataTablesCSS')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('title') 
Zoom Meetings
@endsection
@section('content')
<div class="mh-100" style="height: 100px";></div>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Zoom</h3>
                <div class="card-tools" class="center">
                  <a href="{{ url('api/index-create') }}" class="btn btn-tool">
                      <i class="fa fa-plus"></i>
                      &nbsp; Tambah Zoom Meeting Baru
                  </a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>topic</th>
                    <th>start_time</th>
                    <th>agenda</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($response['meetings'] as $response)
                    <tr>
                      <td>{{ $response['topic'] }}</td>
                        <td>{{ $response['start_time'] }}</td>
                      <td>{{ $response['agenda'] }}</td>

                      <td class="text-center">
                        <form method="POST" action="{{ URL::to('api/meetings/'.$response['id']) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE"/>
                            <div>

                                <a class="btn btn-info" href="{{ URL::to('api/meetings/'.$response['id']) }}"><p>Join</p></a>
                           
  
                                <a class="btn btn-success" href="{{ url('api/index-update/'.$response['id']) }}" title="Ubah Data Zoom"><p>Edit</p></a>
                  
                                <button title="Hapus Data Zoom" onclick="confirmDelete()" type="submit" class="btn btn-danger"><p>Delete</p></button>
                            </div>
                        </form>
                      </td>
                    </tr>
                 @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>topic</th>
                    <th>start_time</th>
                    <th>agenda</th>
                    <th>Aksi</th>
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
