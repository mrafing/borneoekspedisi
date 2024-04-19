{{-- @dd ($kecamatans) --}}

@extends('layouts.main')

@section('container')
<div class="hero-about">
    <div class="text-hero-about">
        <h1 class="mb-0 fw-bold"><i>PILIHAN PENGIRIMAN</i></h1>
        <h1 class="mb-0 fw-bold"><i>YANG LEBIH BAIK</i></h1>
    </div>
</div>

<div class="aside-about pt-5">
    <div class="container">
        <div class="ms-0 ms-md-5">
            <h2 class="fw-bold mb-0 text-white"><i>PROFIL PERUSAHAAN</i></h2>
            <h3 class="fw-bold text-white"><i>PT. BORNEO CITRA EXPRESS</i></h3>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 text-white">
                <p>Borneo Ekspedisi merupakan sebuah Perusahaan yang bergerak di bidang jasa layanan pengiriman barang yang berdiri sejak tahun 2022.</p>
                <p>Melayani pengiriman dengan rute Seluruh Indonesia & Luar Negeri, Kami siap memudahkan proses distribusi barang kiriman anda.</p>
            </div>
            <div class="col-md-5 text-white">
                <img src="{{ asset('img/img8.png') }}" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-5 my-5">
            <div>
                <h5 class="fw-bold">Visi</h5>
                <p>Menjadi Perusahaan yang mampubersaing dan menjadi pilihan masyarakat secara baik di Kalimantan barat dan Seluruh Indonesia</p>
            </div>
            <div>
                <h5 class="fw-bold">Misi</h5>
                <p>Memberikan kemudahan di setiap layanan agar tetap efisien dari segi estimasi waktu dan biaya pengiriman</p>
            </div>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('img/img9.png') }}" alt="" style="width: 100%">
        </div>
    </div>
</div>
@endsection