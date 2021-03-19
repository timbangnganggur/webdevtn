@extends('company.template.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Riwayat Lowongan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                @foreach ($lowongan as $data)
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                            <div class="col-xs-3">
                                    <button type="button" @if ($data->status == 'buka')
                                        class="btn btn-default btn-xs
                                        @else
                                        class="btn btn-danger btn-xs
                                        @endif
                                        ">{{$data->status}}</button>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <i class="fa fa-suitcase fa-2x"></i>
                                    <div class="font-heading">{{$data->nama}}</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="panel-body">
                            <a href="{{ route('perusahaan.lowongan.edit', $data->id) }}"><div class="fa fa-pencil-square"> Edit</div></a>
                            <h4>{{$data->perusahaan->nama}}</h4>
                            <h6>{{$data->bidang->nama}}</h6>
                            <h6 class="float-right">Untuk jenjang {{$data->jenjang->nama}}</h6>
                            <hr>
                            <p>
                                {{$data->deskripsi}}
                            </p>
                            <hr>
                            <div style="text-align: right;">
                                <h6>Max Pendaftar : {{$data->max_pendaftar}}</h6>
                                <h6>Tgl. mulai : {{$data->tanggal_mulai}}</h6>
                                <h6>Tgl. selesai : {{$data->tanggal_selesai}}</h6>
                            </div>
                        </div>
                        <a href="{{route('perusahaan.lowongan.pendaftar', $data->id)}}">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Pelamar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
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