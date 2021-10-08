<style>
  @media (max-width: 240px) {
     /* really tiny screens */
     #navbar-brand-img {
         width: 40px;
     }
        #navbar-container{
         padding:10px;
     }
  }
  @media (min-width: 241px) and (max-width: 300px) {
     /* a little bit bigger screens */
     #navbar-brand-img {
         width: 40px;
     }
     
     #navbar-container{
         padding:10px;
     }
  }
  @media (min-width: 320px) and (max-width: 767px) {
     /* Basically up to, but not including an iPad */
     #navbar-brand-img {
         width: 40px;
     }
     #navbar-container{
         padding:10px;
     }
  }
  @media (min-width: 768px) {
     /* iPad and bigger */
     #navbar-brand-img {
         width: 80px;
     }
  }
  </style>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light mx-4 mt-2 p-0 pr-4 fixed-top">
    <div class="container-fluid" id="navbar-container">
      <a class="navbar-brand p-0 m-0" href="{{ URL::to('/') }}"><span><img id="navbar-brand-img" class="img-fluid mx-5" src="{{ asset('img/Logo.png') }}" alt=""></span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav text-end ml-auto my-1 fw-bold">
          <a class="nav-link text-center mr-2" href="{{ route('profileTN') }}"><span class="fw-bold">Profile TN</span></a>
          <a class="nav-link text-center mr-2" href="{{ route('ayoMakaryo') }}"><span class="fw-bold">Ayo Makaryo</span></a>
          <a class="nav-link text-center mr-2" href="{{ route('clbk') }}"><span class="fw-bold">CLBK</span></a>
          <a class="nav-link text-center mr-2" href="{{ route('artikel.index') }}"><span class="fw-bold">Artikel</span></a>
          <a class="nav-link text-center mr-2" href="{{ route('zoom.index') }}"><span class="fw-bold">Zoom</span></a>
        </div>
            @if (!Auth::check())
              <div class="masuk">
                <button type="button" class="btn btn-sm btn-danger m-auto rounded" data-toggle="modal" data-target="#modal-login"><span class="fw-bold">Masuk</span></button>
              </div>
              <div class="text-center">
                <span class="fw-bold">atau</span>
              </div>
              <div class="daftar">
                <button type="button" class="btn btn-sm btn-danger m-auto rounded" data-toggle="modal" data-target="#modal-register"><span class="fw-bold">Daftar</span></button>
              </div>
            @else
              <button type="button" class="btn btn-danger tombol w-100" data-toggle="modal" data-target="#exampleModal3">Logout</button>
            @endif
    </div>
    </div>
  </nav> <!-- Akhir NavBar-->
   