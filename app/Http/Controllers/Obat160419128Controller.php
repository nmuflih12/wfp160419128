<?php

namespace App\Http\Controllers;

//use App\KategoriObat160419128;
use App\Obat160419128;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Block\Element\ListData;

class Obat160419128Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata=Obat160419128::all();

        return view('obat160419128.index',compact('listdata'));
    }

    public function showBatuk(){

        //$listdata = Obat160419128::where('kategoriobat_id', 1)
        $listdata = Obat160419128::whereRaw('mod(kategoriobat_id, 2) = 0')

        ->orderBy('id')
        ->get(); 

        return view ('obat160419128.listbatuk', compact('listdata'));
    }

    public function showStokObat(){
        $stok = Obat160419128::selectRaw('min(stok) as minStok')->get();

        $listdata = Obat160419128::where('stok', '=', $stok[0] -> minStok)->get();

        return view ('laporan160419128.stokobatdikit', compact('listdata'));
    }

    public function showDaftarKategori(){

        $listdata = Obat160419128::join('kategoriobat160419128', 'kategoriobat160419128.id', '=', 'kategoriobat_id')
        ->select('kategoriobat160419128.id', 'kategoriobat160419128.nama')
        ->selectRaw('sum(harga) as totalharga')
        ->groupBy('kategoriobat_id', 'kategoriobat160419128.id', 'kategoriobat160419128.nama')
        ->orderBy('totalharga', 'asc')
        ->get();
        
        //return dd($listdata);
        return view('laporan160419128.daftarkategori', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Obat160419128  $obat160419128
     * @return \Illuminate\Http\Response
     */
    public function show(Obat160419128 $obat160419128)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat160419128  $obat160419128
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat160419128 $obat160419128)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat160419128  $obat160419128
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat160419128 $obat160419128)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat160419128  $obat160419128
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat160419128 $obat160419128)
    {
        //
    }
}
