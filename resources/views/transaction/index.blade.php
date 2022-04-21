@extends('layout.conquer2')

@section('title')
Daftar Transaksi
@endsection

@section('content')
<table class="table table=hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaksi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
            <tr>
              <td>{{$li -> id}}</td>
              <td>{{$li -> buyer -> name}}</td>
              <td>{{$li -> user -> name}}</td>
              <td>{{$li -> transaction_date}}</td>
              <td><a href="./rinciantransaksi/{{$li -> id}}" class="btn btn-default">Lihat Rincian Pembelian</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection