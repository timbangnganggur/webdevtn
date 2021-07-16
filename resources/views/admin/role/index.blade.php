@extends('admin.main')
@section('dataTablesCSS')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('title')
    Role
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Role</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Role</li>
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
                <h3 class="card-title">Informasi Akun Admin (superadmin, loker, artikel)</h3>
                <div class="card-tools">
                  <a href="{{ route('admin.role.create') }}" class="btn btn-tool">
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
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($admins as $admin)
                    <tr>
                      <td>{{ $admin->name }}</td>
                      <td>{{ $admin->username }}</td>
                      <td>{{ $admin->role }}</td>

                      <td class="text-center">
                        <form method="POST" action="{{ URL::to('admin/role/'.$admin->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" />
                            <div class="btn-group">
                                {{-- <a class="btn btn-info" href="{{ URL::to('admin/info-loker/'.$role->id) }}"><i class="fa fa-eye"></i></a> --}}
                                {{-- <a class="btn btn-success" href="{{ $role->id }}" title="Ubah Data Perusahaan"><i class="fa fa-magic" aria-hidden="true"></i></a> --}}
                                @if ($admin->role == 'superadmin')
                                    <button title="Tidak Dapat Hapus Data Admin" onclick="confirmDelete()" type="submit" class="btn btn-danger" disabled><i class="fa fa-trash"></i></button>                                    
                                @else
                                    <button title="Hapus Data Admin" onclick="confirmDelete()" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>                                                                        
                                @endif
                            </div>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
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