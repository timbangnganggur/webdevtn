<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="profileTN.blade.php"><span><img class="logo" src="/img/Logo.png" alt=""></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/profileTN">Profile TN <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ayo Makaryo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CLBK</a>
        </li>
      </ul>
    </div>
    <div class="masuk">
      <!-- <a href="" class="tombol">Masuk</a> -->
      <button type="button" class="btn btn-primary tombol" data-toggle="modal" data-target="#exampleModal"> Masuk</button>

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
              <form>
                <div class="row justify-content-center">
                  <div class="col-9 ">
                    <div class="form-group ">
                      <label for="exampleInputUsername">Username</label>
                      <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="usernamelHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <div class="form-group form-check">
                      <small><a href="#">*Forgot password?</a></small>
                    </div>
                    <button type="submit" class="btn btn-primary tombol" style="margin-left: 120px;">Masuk</button>
                    <span><br><strong style="margin-left: 155px;">atau</strong><br></span>
                    <button type="submit" class="btn  btn-login" style="height: 50px; margin-left: 60px; border: 2px solid white;"><i class="fab fa-google"></i>Masuk dengan google</button>
              </form>

            </div>
          </div>
        </div>
        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
      </div>
    </div>
  </div>
  <!-- Akhir Modal Masuk -->

  </div>
  <div class="atau">
    <span><strong>atau</strong></span>
  </div>
  <div class="daftar">
    <button class="btn btn-primary tombol" data-toggle="modal" data-target="#exampleModal2"> Daftar</button>

    <!-- Awal Modal Daftar-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Daftar</h5>
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
                <button type="submit" class="btn tombol">Daftar</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Akhir Modal Daftar -->
  </div>
  </div>
</nav> <!-- Akhir NavBar-->