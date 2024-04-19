{{-- @dd ($kecamatans) --}}

@extends('layouts.main')

@section('container')
<div class="container py-5 px-0" style="min-height: 90vh">
    @if ($trackings->isEmpty())
        <div class="alert alert-warning" role="alert">
            Maaf nomor resi tidak sesuai, Pastikan anda menulis nomor resi yang sesuai
        </div>
    @else
        <div class="container my-5 pb-5">
            <h5 class="mb-3">{{ request('no_resi') }}</h5>
            @foreach ( $trackings as $key => $tracking )
                <div class="list-group">
                    <div class="list-group-item list-group-item-action @if($key === 0) active @endif" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">
                                {{ $tracking->status_tracking }}
                                {{-- OUTLET B --}}
                                @if ($tracking->status_tracking == 'ACC - B')
                                    {{ $tracking->outlet_b_org->nama_agen }}
                                @elseif ($tracking->status_tracking == 'DEL - A')
                                    {{ $tracking->outlet_a_org->nama_agen }}

                                {{-- OUTLET A --}}
                                @elseif ($tracking->status_tracking == 'INC - A')
                                    {{ $tracking->outlet_a_org->nama_agen }}
                                @elseif ($tracking->status_tracking == 'ACC - A')
                                    {{ $tracking->outlet_a_org->nama_agen }}
                                @elseif ($tracking->status_tracking == 'DEL - WRH')
                                    {{ $tracking->outlet_gw_org->nama_agen }}
                                @else
                                    {{ '' }}
                                @endif
                            </h5>
                            <small>{{ date('D, d M Y', strtotime($tracking->create_at)) }}</small>
                        </div>
                        <p class="mb-1">
                            {{ $tracking->keterangan }}

                            {{-- OUTLET B --}}
                            @if ($tracking->status_tracking == 'ACC - B')
                                {{ $tracking->outlet_b_org->nama_agen }}
                            @elseif ($tracking->status_tracking == 'DEL - A')
                                {{ $tracking->outlet_a_org->nama_agen }}
                                
                            {{-- OUTLET A --}}
                            @elseif ($tracking->status_tracking == 'INC - A')
                                {{ $tracking->outlet_a_org->nama_agen }}
                            @elseif ($tracking->status_tracking == 'ACC - A')
                                {{ $tracking->outlet_a_org->nama_agen }}
                            @elseif ($tracking->status_tracking == 'DEL - WRH')
                                {{ $tracking->outlet_gw_org->nama_agen }}
                            
                            {{-- GW --}}
                            @elseif ($tracking->status_tracking == 'INC - WRH')
                                {{ $tracking->outlet_gw_org->nama_agen }}
                            @else
                                {{ '' }}
                            @endif
                        </p>
                        {{-- <small>And some small print.</small> --}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection