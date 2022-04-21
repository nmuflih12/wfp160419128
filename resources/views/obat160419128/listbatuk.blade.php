@extends('layout.conquer2')

@section('title')
Daftar Obat Batuk
@endsection

@section('content')
<table class="table table=hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>ID Kategori</th>
        <th>Nama Obat</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
            <tr>
                <td>{{$li -> id}}</td>
                <td>{{$li -> kategoriobat -> id}}</td>
                <td>{{$li -> nama_obat}}</td>
                <td>{{$li -> stok}}</td>
                <td>Rp.{{$li -> harga}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection