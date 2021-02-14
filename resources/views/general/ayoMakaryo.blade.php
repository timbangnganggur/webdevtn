@extends('general.master')
@section('content')

    <div class="headAyoMakaryo">
        <div class="container ham">
            <form>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Perusahaan">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Bidang Profesi">
                  </div>
                  <div class="col">
                    <select id="inputState" class="form-control">
                        <option selected>Jenis Pekerjaan</option>
                        <option>Pekerjaan 1</option>
                        <option>Pekerjaan 2</option>
                        <option>Pekerjaan 3</option>
                    </select>
                  </div>
                  <div class="col search-box">
                    <input class="form-control search-text" type="search" placeholder="Kabupaten/Kota">
                </div>
               <button class="submit-btn"> <i class="fas fa-search"></i> </button>
    
                </div>
              </form>
        </div>
    </div>
    


    
    <div class="container">
        <div class="row">
            <!-- Area Kiri -->
            <div class="col-md-9">
                <h2 id="loker">Lowongan Pekerjaan</h2>
                <div class="lowongan-kerja">
                    <div class="row">
                            <div class="card" style="width: 16rem;">
                                <img src="img/Logo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Perusahaan</h5>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                                    <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                    <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                                    <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                    <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        
            
                            <div class="card" style="width: 16rem;">
                                <img src="img/Logo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Perusahaan</h5>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                                    <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                    <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                                    <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                    <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        
                        
                            <div class="card" style="width: 16rem;">
                                <img src="img/Logo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Perusahaan</h5>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                                    <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                    <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                                    <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                    <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="card" style="width: 16rem;">
                            <img src="img/Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Perusahaan</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                                <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                                <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    
        
                        <div class="card" style="width: 16rem;">
                            <img src="img/Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Perusahaan</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                                <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                                <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    
                    
                        <div class="card" style="width: 16rem;">
                            <img src="img/Logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Perusahaan</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                                <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                                <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="card" style="width: 16rem;">
                        <img src="img/Logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Perusahaan</h5>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                            <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                            <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                            <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                            <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                
    
                    <div class="card" style="width: 16rem;">
                        <img src="img/Logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Perusahaan</h5>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                            <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                            <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                            <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                            <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                
                
                    <div class="card" style="width: 16rem;">
                        <img src="img/Logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Perusahaan</h5>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                            <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                            <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                            <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                            <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="card" style="width: 16rem;">
                    <img src="img/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Perusahaan</h5>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                        <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                        <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                        <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                        <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            

                <div class="card" style="width: 16rem;">
                    <img src="img/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Perusahaan</h5>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                        <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                        <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                        <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                        <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            
            
                <div class="card" style="width: 16rem;">
                    <img src="img/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Perusahaan</h5>
                        <p class="card-text"><i class="fas fa-map-marker-alt"></i> Daerah </p>
                        <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                        <p class="card-text"><i class="fas fa-coins"></i> Gaji </p>
                        <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                        <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                    </div>
                </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>

                </div>
            </div>

            <div class="vl md-1"></div>

            <!-- Area Kanan -->
            <div class="col-md-2">

                <div class="tersimpan">
                    <h2 id="tersimpan"><i class="fas fa-bookmark"></i> Tersimpan </h2>
                    <div class="Tersimpan">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="img/Logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 17rem; ">
                                    <img src="img/Logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="img/Logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>
        
                        </div>
                    </div>
                </div>
        
                <div class="terakhir-dilihat">
                    <h2 id="terakhir-dilihat"><i class="fas fa-history"></i> Terakhir Dilihat</h2>
                    <div class="terakhir-lihat">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="img/Logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 17rem; ">
                                    <img src="img/Logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 17rem; ">
                                    <img src="img/Logo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="card-text"><i class="fas fa-user"></i> Profesi </p>
                                      <p class="card-text"><i class="fas fa-clock"></i> Jenis Pekerjaan </p>
                                      <a href="/detailLowongan" class="btn btn-primary">Detail</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection