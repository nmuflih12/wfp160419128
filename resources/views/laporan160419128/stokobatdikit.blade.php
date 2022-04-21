@extends('layout.conquer2')

@section('title')
Daftar obat dengan stok paling sedikit
@endsection

@section('content')
<table class="table table=hover">
    <thead>
      <tr>
        <th>Nama Obat</th>
        <th>Harga</th>
        <th>Stok Obat</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
            <tr>
                <td>{{$li -> nama_obat}}</td>
                <td>Rp.{{$li -> harga}}</td>
                <td>{{$li -> stok}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection