<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObat160419128Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat160419128', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('harga')->nullable();
            $table->timestamps();
        });

        Schema::create('kategoriobat160419128', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat160419128');
        Schema::dropIfExists('kategoriobat160419128');
    }
}
