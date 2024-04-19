{{-- @dd ($ongkirs) --}}

@extends('layouts.main')

@section('container')

<div class="container py-5 px-0" style="min-height: 90vh">
  
  @if ($ongkirs->isEmpty())
    <div class="alert alert-warning" role="alert">
      Tidak ada data ongkir yang tersedia saat ini.
    </div>
  @else
    <div class="row justify-content-center gap-2">
      @foreach ($ongkirs as $ongkir)
        <div class="col-sm-3 card">
            <div class="card-body">
                <h5 class="card-title text-primary"><b>{{ $ongkir->layanan->nama_layanan }}</b></h5>
                <small><b>{{ $ongkir->komoditi->nama_komoditi }}</b></small>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ "Rp. " . $ongkir->harga_ongkir . "/Kg" }}</li>
                <li class="list-group-item">{{ "Rp. " . $ongkir->harga_transit . " Transit" }}</li>
                <li class="list-group-item">{{ "Total Rp. " . ($berat_aktual * $ongkir->harga_ongkir) + $ongkir->harga_transit }}</li>
                <li class="list-group-item text-danger">{{ "Estimasi " . $ongkir->estimasi }}</li>
            </ul>
        </div>
      @endforeach
    </div>
  @endif

</div>

@endsection