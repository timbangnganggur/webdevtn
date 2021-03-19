@extends('perusahaan/template/master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<div>
    <div class="jumbotron">
        <h1>Selamat Datang</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
        <p><a class="btn btn-primary btn-lg" role="button" href="{{route('perusahaan.lowongan.create')}}">Buka Lowongan Magang</a>
        </p>
    </div>

</div>
</div>
<!-- /#wrapper -->
@endsection