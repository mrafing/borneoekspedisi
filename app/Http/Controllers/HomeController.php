<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Outlet;
use App\Models\HargaOngkir;
use App\Models\Tracking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "active" => "home",
            "kecamatans" => Kecamatan::all(),
            "kotas" => Kota::all()
        ]);
    }

    public function cekOngkir()
    {
        $idKotaAsal = request()->input('idKotaAsal');
        $idKecamatanTujuan = request()->input('idKecamatanTujuan');
        $beratAktual = request()->input('beratAktual');

        $ongkirs = HargaOngkir::where('id_kota_asal', $idKotaAsal)
                        ->where('id_kecamatan_tujuan', $idKecamatanTujuan)
                        ->get();

        return view('cekOngkir', [
            "title" => 'Cek Ongkir',
            "active" => 'cekOngkir',
            "berat_aktual" => $beratAktual,
            "ongkirs" => $ongkirs
        ]);
    }

    public function cariAgen()
    {
        $idKotaAgen = request()->input('idKotaAgen');
        $outlets = Outlet::whereHas('kecamatan', function ($query) use ($idKotaAgen) {
            $query->where('id_kota', $idKotaAgen);
        })->paginate(5)->withQueryString();
        

        return view('cariAgen', [
            "title" => 'Cari Agen',
            "active" => 'cariAgen',
            "outlets" => $outlets,
            "kotas" => Kota::all(),
        ]);
    }

    public function lacakPaket()
    {
        $no_resi = request()->input('no_resi');

        return view('lacakPaket', [
            "title" => 'Lacak Paket',
            "active" => 'lacakPaket',
            "trackings" => Tracking::where('no_resi', $no_resi)->latest('create_at')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
