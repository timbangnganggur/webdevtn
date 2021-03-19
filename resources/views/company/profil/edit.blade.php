@extends('company.template.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Profil Perusahaan</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Profil
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <form role="form">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kabupaten_provinsi_id">Kabupaten/Kota</label>
                            <select name="kabupaten_provinsi_id" class="form-control">
                                <option value="" selected>Pilih Status</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto_url">Foto</label>
                            <input type="file" name="foto_url">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>

                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('perusahaan-asset/images/profil-perusahaan/logo-perusahaan.jpg')}}" class="img-fluid" align="right" width="400px">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /#wrapper -->
@endsection