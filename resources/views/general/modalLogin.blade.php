@if (!Auth::check())
<!-- Awal Modal Masuk-->
    <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                @if (session('alert-success-register'))
                    <div class="alert alert-success">
                        {{ session('alert-success-register') }}
                    </div>
                @endif
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
    <div class="modal fade" id="modal-register" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Daftar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Nama Depan</label>
                <input name="first_name" type="first_name" class="form-control" id="inputNama" placeholder="depan">
                  @if (session('alert-error-register')->first('first_name'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('first_name')}}</div>
                  @endif
                </div>
                <div class="form-group col-md-6">
                <label for="inputNamaBelakang">Nama Belakang</label>
                <input name="last_name" type="last_name" class="form-control" id="inputNamaBelakang" placeholder="belakang">
                  @if (session('alert-error-register')->first('last_name'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('last_name')}}</div>
                  @endif
                </div>
            </div>
                <div class="form-group">
                    Tanggal Lahir
                    <div class="form-group">
                    <input
                    type="date"
                    name="birthdate"
                    id="birthdate"
                    placeholder="YYYY/MM/DD"
                    value="2018-07-22"
                   min="1500-01-01" 
                   max="2100-12-31">
                    </div>
                    @if (session('alert-error-register')->first('birthdate'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('birthdate')}}</div>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input name="username" type="username" class="form-control" id="inputUsername" placeholder="username">
                <small>min. 6 karakter</small>
                    @if (session('alert-error-register')->first('username'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('username')}}</div>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputNomor">No. Hp</label>
                <input name="phone_number" type="tel" class="form-control" id="inputNomor" placeholder="+62" pattern="^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$">
                    @if (session('alert-error-register')->first('phone_number'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('phone_number')}}</div>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputInstagram">Instagram</label>
                <input name="instagram_account" type="instagram_account" class="form-control" id="inputInstagram">
                @if (session('alert-error-register')->first('instagram_account'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('instagram_account')}}</div>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input name=email type="email" class="form-control" id="inputEmail">
                 @if (session('alert-error-register')->first('email'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('email')}}</div>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword" minlength="8" required>
                <small>min. 8 karakter</small>
                @if (session('alert-error-register')->first('password'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('password')}}</div>
                  @endif
            </div>
            <div class="form-group">
                <label for="inputPassword2">Ulangi Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword2" minlength="8" required>
                @if (session('alert-error-register')->first('password'))
                    <div class="text-danger text-center bg-warning" >{{session('alert-error-register')->first('password')}}</div>
                  @endif
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