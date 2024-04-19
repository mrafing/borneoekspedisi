{{-- @dd ($outlets) --}}

@extends('layouts.main')

@section('container')

<div class="cnt-hero-cari-agen">
    <div class="hero-cari-agen">
    </div>

    <div class="form-cek-agen">
        <div class="card shadow mb-3 px-3">
            <div class="card-body">
                <h5 class="fw-bold text-center mb-3">Lokasi Agent Borneo Citra Express</h5>
                <form action="/cariAgen" class="row justify-content-center mb-3">
                    <div class="col-9 p-0">
                      <select class="form-select js-example-basic-single" name="idKotaAgen" style="width: 100%">
                          @foreach ( $kotas as $kota )
                            <option value="{{ $kota->id }}" {{ (request('idKotaAgen') == $kota->id) ? 'selected' : ''  }}>
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

<div class="container py-5 px-0">
  @if ($outlets->isEmpty())
    <div class="alert alert-warning" role="alert">
      Lokasi Agen Belum Tersedia
    </div>
  @else
    @foreach ( $outlets as $outlet )
      <div class="card px-3 pt-3 mb-3">
        <div class="row align-items-baseline">
            <div class="col-sm-3 mb-2">
              <p class="fw-bold mb-2">Nama Agen</p>
              <p class="mb-1">{{ $outlet->nama_agen }}</p>
            </div>
            <div class="col-sm-4 mb-2">
              <p class="fw-bold mb-2">Alamat Agen</p>
              <p>{{ $outlet->alamat }}</p>
            </div>
            <div class="col-sm-3 mb-2">
              <p class="fw-bold mb-2">Telepon</p>
              <p>{{ $outlet->nomor_kontak }}</p>
            </div>
            <div class="col-sm-2 mb-2">
              <a class="btn mt-2" style="background-color: #1C4CA7; color: #fff;" href="{{ $outlet->link_alamat }}" target="_blank">Lihat Lokasi</a>
            </div>
        </div>
      </div>
    @endforeach
    <div class="d-flex justify-content-end">
      {{ $outlets->links() }}
    </div>
  @endif
</div>

@endsection