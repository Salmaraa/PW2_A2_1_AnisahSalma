@extends('layouts.main')

@section('content')
    <div class="container">
        <h4>Tambah Barang</h4>
        <form method ="post" action="{{route ('buku.store') }}">
         @csrf
            <div>Nama Barang <input type="text" name="nama_barang"></div>
            <div>Harga <input type="text" name="harga"></div>
            <div>Stok <input type="number" name="harga"></div>
            <div>id_suplier <input type="date" name="id_suplier"></div>
            <div><button type="submit"> Simpan</button>
            <a href="/barang">Cancel</a></div>
        </form>
    </div>
@endsection
