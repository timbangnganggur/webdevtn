@extends('company.template.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Lowongan Magang</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">          
                    Input Data Lowongan
             </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <form role="form" action="{{route('admin.perusahaan.lowongan.update', $lowongan->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" value="{{$lowongan->nama}}" name="nama" class="form-control" id="nama" placeholder="Judul Lowongan">
                        </div>
                        <input type="hidden" value="{{$lowongan->perusahaan_id}}" name="perusahaan_id" class="form-control" id="perusahaan_id">
                        <div class="form-group mb-3">
                            <label for="bidang_id">Bidang</label>
                            <select name="bidang_id" class="form-control">
                            @foreach ($bidang as $data)
                                <option value="{{$data->id}}"
                                @if($data->id == $lowongan->bidang_id)
                                selected
                                @endif
                                >{{$data->nama}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenjang_id">Jenjang</label>
                            <select name="jenjang_id" class="form-control">
                                <option value="" selected>Pilih Jenjang</option>
                                @foreach ($jenjang as $data)
                                <option value="{{ $data->id }}"
                                @if($data->id == $lowongan->jenjang_id)
                                selected
                                @endif
                                >
                                    {{ $data->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3">{{$lowongan->deskripsi}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="buka"
                                @if($lowongan->status == 'buka')
                                selected
                                @endif
                                >Buka</option>
                                <option value="tutup"
                                @if($lowongan->status == 'tutup')
                                selected
                                @endif
                                >Tutup</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cp" class="form-label">Contact</label>
                            <input type="number" value="{{$lowongan->cp}}" name="cp" class="form-control" id="cp" placeholder="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="max_pendaftar" class="form-label">Max Pendaftar</label>
                            <input type="number" class="form-control" value="{{$lowongan->max_pendaftar}}" name="max_pendaftar" id="max_pendaftar" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" value="{{$lowongan->tanggal_mulai}}" class="form-control" id="tanggal_mulai" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" value="{{$lowongan->tanggal_selesai}}" class="form-control" id="tanggal_selesai" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="{{url()->previous()}}" class="btn btn-default">Batal</button> 
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('perusahaan-asset/images/pic_buka_lowongan.jpg')}}" class="img-fluid" align="right" width="400px">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /#wrapper -->
@endsection