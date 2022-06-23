@extends('layout.conquer2')

@section('title')
Daftar Semua Obat
@endsection

@section('content')
@if (session('status'))
				<div class="alert alert-success">
					{{ session('status')}}
				</div>
@endif
<table class="table table=hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Kategori Obat</th>
        <th>Supplier</th>
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
              <td>{{$li -> suppliers -> name}}</td>
              <td><a href="{{route('obat.edit', $li->id)}}" class="btn btn-xs btn-info">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class ="page bar">
    <div class="page-toolbar">
        <a href="{{url('obat/create')}}" class='btn btn-info' type="button">
            Tambah Obat Baru
        </a>
    </div>
</div>
@endsection

