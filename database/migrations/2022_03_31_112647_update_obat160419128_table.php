<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateObat160419128Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obat160419128', function (Blueprint $table) {
            $table->unsignedBigInteger('kategoriobat_id');

            $table->foreign('kategoriobat_id')->references('id')->on('kategoriobat160419128');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
