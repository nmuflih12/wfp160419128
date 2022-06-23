<?php

namespace App\Http\Controllers;

use App\KategoriObat160419128;
use App\Suppliers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriObat160419128Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata=KategoriObat160419128::all();

        return view('kategoriobat.index',compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("kategoriobat.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new KategoriObat160419128();
        $data -> nama = $request -> get('inputName');
        $data -> save();

        return redirect()->route('kategoriobat.index')->with('status', 'Kategori obat telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriObat160419128  $kategoriObat160419128
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriObat160419128 $kategoriObat160419128)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriObat160419128  $kategoriObat160419128
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listkategori = KategoriObat160419128::find($id);

        return view('kategoriobat.edit', compact('listkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriObat160419128  $kategoriObat160419128
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $listkategori = KategoriObat160419128::find($id);

        $listkategori -> nama = $request -> get('nama');
        $listkategori -> save();

        return redirect()->route('kategoriobat.index')->with('status', 'Kategori obat telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriObat160419128  $kategoriObat160419128
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriobat = KategoriObat160419128::find($id);
        //dd($kategoriobat);

        try{
            $kategoriobat -> delete();
            return redirect() -> route('kategoriobat.index')->with('status', 'Data kategori obat berhasil dihapus.');
        }catch(\PDOException $e){
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan!";

            return redirect()->route('kategoriobat.index')->with('error', $msg);
        }
    }
}
