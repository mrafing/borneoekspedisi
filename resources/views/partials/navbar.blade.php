<nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
    <div class="container-fluid p-0" style="background-color: #DBDDE3">
      <a class="navbar-brand ps-2 ps-lg-5" href="#">
        <img src="{{ URL::to('img/logoborneo.png') }}" alt="" width="100px">
      </a>

      <button class="navbar-toggler me-2 me-lg-5 my-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 ps-2 ps-lg-5 py-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/') }}" style="{{ $active === "home" ? 'color: #2F55BC;' : '' }}"><b>Beranda</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('tentangKami') }}" style="{{ $active === "tentangKami" ? 'color: #2F55BC;' : '' }}"><b>Tentang Kami</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('layanan') }}" style="{{ $active === "layanan" ? 'color: #2F55BC;' : '' }}"><b>Layanan</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('kemitraan') }}" style="{{ $active === "kemitraan" ? 'color: #2F55BC;' : '' }}"><b>Kemitraan</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('kontak') }}" style="{{ $active === "kontak" ? 'color: #2F55BC;' : '' }}"><b>Kontak</b></a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 px-2 px-lg-5 py-0 py-lg-3" id="daftarMasuk">
          <li class="nav-item">
            <a class="nav-link" href="#"><b>Daftar / Masuk</b></a>
          </li>
        </ul>
      </div>
    </div>
</nav>