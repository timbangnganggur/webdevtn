@if (!Auth::check())
<!-- Awal Modal Masuk-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row p-3">
                <div class="col-10 m-auto">
                <div class="form-group">
                    <label class="form-label" for="exampleInputUsername">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernamelHelp">
                </div>
                <div class="form-group">
                    <label class="form-label" for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword">
                </div>
                <div class="form-group form-check">
                    <small><a href="#">*Forgot password?</a></small>
                </div>
                <div class="col m-auto">
                    <div class="d-grid gap-2 m-auto">
                    <button type="submit" class="btn btn-block btn-success">Masuk</button>
                    <div class="row m-auto">
                        <span class="fw-bold">atau</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-warning"><i class="fab google fa-google"></i>Masuk dengan google</button>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    
    <!-- Awal Modal Daftar-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Daftar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" placeholder="depan">
                </div>
                <div class="form-group col-md-6">
                <label for="inputNamaBelakang">.</label>
                <input type="text" class="form-control" id="inputNamaBelakang" placeholder="belakang">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputCity">Tanggal Lahir</label>
                <select id="inputState" class="form-control">
                    <option selected>Tanggal</option>
                    <option>1</option>
                    <option>2</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="inputState">.</label>
                <select id="inputState" class="form-control">
                    <option selected>Bulan</option>
                    <option>Januari</option>
                    <option>Februari</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="inputZip">.</label>
                <select id="inputState" class="form-control">
                    <option selected>Tahun</option>
                    <option>1999</option>
                    <option>2000</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="username">
                <small>min. 6 karakter</small>
            </div>
            <div class="form-group">
                <label for="inputNomor">No. Hp</label>
                <input type="text" class="form-control" id="inputNomor" placeholder="+62 ">
            </div>
            <div class="form-group">
                <label for="inputInstagram">Instagram</label>
                <input type="text" class="form-control" id="inputInstagram">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword">
                <small>min. 8 karakter</small>
            </div>
            <div class="form-group">
                <label for="inputPassword2">Ulangi Password</label>
                <input type="password" class="form-control" id="inputPassword2">
            </div>
            <div class="modal-footer">
                <div class="col m-auto">
                <div class="d-grid gap-2 m-auto">
                    <button type="submit" class="btn btn-block btn-success">Daftar</button>
                </div>
                </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>   
@else
    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            Apakah Anda yakin ingin logout?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-primary" onclick="document.getElementById('logout').submit();">Ya</button>
            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
        </div>
    </div>
    </div>
@endif