<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriObat160419128 extends Model
{
    protected $table ='kategoriobat160419128';
    
    public function obat()
    {
        return $this->hasMany('App\Obat160419128', 'kategori_id', 'id');
    }
}
