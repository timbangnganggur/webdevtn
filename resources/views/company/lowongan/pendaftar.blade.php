@extends('company.template.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pendaftar</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<div>

    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>{{$lowongan->nama}}</h3>
            </div>
            <div class="panel-body">
            
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Politeknik Elektronika Negeri Surabaya</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-1">
                                1
                            </div>
                            <div class="col-xs-8">
                                Nova Andre Saputra
                            </div>
                            <div class="col-xs-3">
                                <a href=""><b>CV</b></a>
                            </div>
                            <div class="col-xs-1">
                                2
                            </div>
                            <div class="col-xs-8">
                                Silfiana Nur Hamida
                            </div>
                            <div class="col-xs-3">
                                <a href=""><b>CV</b></a>
                            </div>
                            <div class="col-xs-1">
                                3
                            </div>
                            <div class="col-xs-8">
                                Muhammad Rivaldin
                            </div>
                            <div class="col-xs-3">
                                <a href=""><b>CV</b></a>
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('perusahaan.lowongan')}}">
                                <div class="panel-footer col-xs-6 text-center">
                                    <span style="color: green;"><b>TERIMA</b></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <a href="{{route('perusahaan.lowongan')}}">
                                <div class="panel-footer col-xs-6 text-center">
                                    <span style="color: red;"><b>TOLAK</b></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /#wrapper -->
@endsection