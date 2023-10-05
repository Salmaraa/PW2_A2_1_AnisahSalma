<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gudang_barang = \App\Models\Barang::all();

        return view('barang', compact('gudang_barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $gudang_barang = new Barang;
        $gudang_barang->judul = $request->judul;
        $gudang_barang->penulis = $request->penulis;
        $gudang_barang->harga = $request->harga;
        $gudang_barang->tgl_terbit = $request->tgl_terbit;
        $gudang_barang->save();
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
