@extends('layout.conquer2')

@section('title')
Rincian Transaksi
@endsection

@section('content')
<div class="portlet">
        <div class="portlet-title">
            <b>Tampilan transaksi dari: {{$listtransaction -> id }} - {{$listtransaction -> transaction_date}}</b>
        </div>
        <div class="portlet-body">
            <div class="row">
                @foreach($listobat as $li)
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img style="width: 200px; height: 200px;" src="{{$li -> gambar}}">
                            <div class="caption">
                                <p align="center"><b>{{$li -> nama_obat}}</b></p>
                                <hr/>
                                <p>Kategori: {{$li -> kategoriobat -> nama}}</p>
                                <p>Harga: {{$li -> harga}} ,-</p>
                                <p>Jumlah Beli: {{$li -> pivot -> quantity}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection