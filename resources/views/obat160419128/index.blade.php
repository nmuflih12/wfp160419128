@extends('layout.conquer2')

@section('title')
Daftar Semua Obat
@endsection

@section('content')
<table class="table table=hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Kategori Obat</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
            <tr>
              <td>{{$li -> id}}</td>
              <td>{{$li -> nama_obat}}</td>
              <td>{{$li -> stok}}</td>
              <td>Rp.{{$li -> harga}}</td>
              <td>{{$li -> kategoriobat -> nama}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

