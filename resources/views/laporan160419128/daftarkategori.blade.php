@extends('layout.conquer2')

@section('title')
Daftar Kategori, diurutkan dari total harga termurah
@endsection

@section('content')
<table class="table table=hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
            <tr>
                <td>{{$li -> id}}</td>
                <td>{{$li -> nama}}</td>
                <td>{{$li -> totalharga}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection