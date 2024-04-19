{{-- @dd ($kecamatans) --}}

@extends('layouts.main')

@section('container')

<div class="hero-kontak">
    <div class="container">
        <div class="text-white mb-3">
            <h1 class="fw-bold mb-0">INFORMASI</h1>
            <h1 class="fw-bold mb-0">CUSTOMER SERVICE</h1>
        </div>
        <div class="text-white" style="max-width: 300px;">
            <h5 class="fw-bold">KANTOR PUSAT</h5>
            <div class="d-flex align-items-baseline">
                <i class="fa-solid fa-location-dot me-2"></i>
                <p class="mb-0">Jalan Pangeran Natakusuma No.5 b Kec, Pontianak Kota, Kota Pontianak Kalimantan Barat 78116</p>
            </div>
            <div class="d-flex align-items-baseline">
                <i class="fa-brands fa-whatsapp me-2"></i>
                <p class="mb-0">0896 9341 8191 - 0812 5695 5705</p>
            </div>
            <div class="d-flex align-items-baseline">
                <i class="fa-regular fa-envelope me-2"></i>
                <p class="mb-0">borneocitraexpress@gmail.com</p>
            </div>
        </div>
    </div>
</div>

<div class="aside-kontak pt-5">
    <div class="container">
        <h4 class="text-center mb-5" style="background-color: #fff; max-width: 387px; border-radius: 6px;">HANDLING DOORING CARGO</h4>
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('img/img17.png') }}" alt="" style="width: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('img/img16.png') }}" alt="" style="width: 100%">
            </div>
            <div class="col-5">
                <img src="{{ asset('img/img15.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </div>
</div>

<div class="aside-kontak2"></div>


@endsection