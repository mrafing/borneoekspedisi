{{-- @dd ($kecamatans) --}}

@extends('layouts.main')

@section('container')

<div class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ URL::to('img/hero-1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::to('img/hero-2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::to('img/hero-3.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container-md mb-5">
    <div class="row my-5 justify-content-between">

        <div class="col-md-auto card shadow mb-3">
            <div class="card-body">
              <h6 class="text-center">Lacak Paket</h6>
                <form action="{{ URL::to('lacakPaket') }}" class="d-flex">
                  <input type="text" class="form-control me-2" name="no_resi" placeholder="Masukkan Nomor Resi">
                  <button class="btn" style="background-color: #2F55BC; color: #fff;" type="submit"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                </form>
            </div>
        </div>

        <div class="col-md-5 card shadow mb-3">
            <div class="card-body">
              <h6 class="text-center">Cek Ongkir</h6>
              <form action="{{ URL::to('cekOngkir') }}" class="row">
                <div class="col-4 p-0">
                  <select class="form-select js-example-basic-single" name="idKotaAsal" style="width: 100%">
                      <option selected>Asal</option>
                      @foreach ( $kecamatans as $kecamatan )
                        <option value="{{ optional($kecamatan->kota)->id }}">
                          {{ strtoupper($kecamatan->nama_kecamatan) . ", " . strtoupper(optional($kecamatan->kota)->nama_kota)  }}
                        </option>
                      @endforeach
                  </select>
                </div>
                <div class="col-4 p-0">
                  <select class="form-select js-example-basic-single" name="idKecamatanTujuan" style="width: 100%">
                      <option selected>Tujuan</option>
                      @foreach ( $kecamatans as $kecamatan )
                        <option value="{{ $kecamatan->id }}">
                          {{ strtoupper($kecamatan->nama_kecamatan) . ", " . strtoupper(optional($kecamatan->kota)->nama_kota)  }}
                        </option>
                      @endforeach
                  </select>
                </div>
                <div class="col-2 p-0">
                  <input type="number" min="1" class="col-auto form-control me-2" name="beratAktual" placeholder="Kg">
                </div>
                <div class="col-auto">
                  <button class="col-auto btn" style="background-color: #2F55BC; color: #fff;"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                </div>
              </form>
            </div>
        </div>

        <div class="col-md-3 card shadow mb-3">
            <div class="card-body">
              <h6 class="text-center">Cari Agen Terdekat</h6>
              <form action="{{ URL::to('cariAgen') }}" class="row">
                <div class="col-8 p-0">
                  <select class="form-select js-example-basic-single" name="idKotaAgen" style="width: 100%">
                      <option selected>Masukkan Kota/Kab</option>
                      @foreach ( $kotas as $kota )
                        <option value="{{ $kota->id }}">
                          {{ strtoupper($kota->nama_kota)  }}
                        </option>
                      @endforeach
                  </select>
                </div>
                <div class="col-auto">
                  <button class="col-auto btn" style="background-color: #2F55BC; color: #fff;"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
                </div>
              </form>
            </div>
        </div>

    </div>
</div>

<div id="asideHome" class="py-3">
  <div class="container-md">
    <div class="row my-5 justify-content-between">
      <div class="col-md-2 mb-3 text-light" data-aos="fade-right" data-aos-delay="200">
        <div class="text-center">
          <img src="{{ URL::to('img/img1.png') }}" alt="">
          <p>Jangkauan Seluruh Indonesia & Luar Negeri</p>
        </div>
      </div>
      <div class="col-md-2 mb-3 text-light" data-aos="fade-right" data-aos-delay="300">
        <div class="text-center">
          <img src="{{ URL::to('img/img2.png') }}" alt="">
          <p>Paket dapat di Lacak Di Sistem website</p>
        </div>
      </div>
      <div class="col-md-2 mb-3 text-light" data-aos="fade-right" data-aos-delay="400">
        <div class="text-center">
          <img src="{{ URL::to('img/img3.png') }}" alt="">
          <p>Paket diantar sampai ke alamat tujuan</p>
        </div>
      </div>
      <div class="col-md-2 mb-3 text-light" data-aos="fade-right" data-aos-delay="500">
        <div class="text-center">
          <img src="{{ URL::to('img/img4.png') }}" alt="">
          <p>Customer Service 24 jam</p>
        </div>
      </div>
      <div class="col-md-2 mb-3 text-light" data-aos="fade-right" data-aos-delay="600">
        <div class="text-center">
          <img src="{{ URL::to('img/img5.png') }}" alt="">
          <p>Spesialis Ekspedisi Kalimantan Barat</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="asideHome2">
  <div class="container-md">
    <div class="row py-5 justify-content-between align-items-center">
      <div class="col-md-4 text-light" data-aos="fade-right" data-aos-delay="300">
        <h1 id="outlined-text" style="color: #2F55BC; font-weight: bolder;"><b>ESTIMASI</b></h1>
        <h4 style="font-weight: bolder">PENGIRIMAN TEPAT WAKTU</h4>
        <p><b>Kami berupaya memberikan estimasi yang lebih cepat untuk semua pelanggan kami kemanapun pengiriman barang anda.</b></p>
        <p><b>Untuk layanan luar pulau kami memiliki pengiriman unggulan dengan estimasi tercepat yaitu SATU HARI SAMPAI TUJUAN ke JAKARTA, BOGOR, DEPOK, TANGERANG, BEKASI, SURABAYA.</b></p>
      </div>
      <div class="col-md-auto text-light"  data-aos="fade-left" data-aos-delay="300">
        <div class="d-flex">
          <img class="me-1 me-md-3" src="{{ URL::to('img/img6.png') }}" alt="" style="width: 50%;">
          <img src="{{ URL::to('img/img7.png') }}" alt="" style="width: 50%;">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection