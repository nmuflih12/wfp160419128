<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat160419128 extends Model
{
    protected $table ='obat160419128';
    
    public function kategoriobat()
    {
        return $this->belongsTo('App\KategoriObat160419128', 'kategori_id');
    }

    public function transactions(){
        return $this->belongsToMany('App\Transaction', 'medicine_transaction','medicine_id','transaction_id')
        ->withPivot('quantity','price');
    }

    public function suppliers(){
        return $this->belongsTo('App\Suppliers', 'suppliers_id');
    }

}