<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirim', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('no_pengiriman');
            $table->date('tanggal');
            $table->integer('lokasi_id');
            $table->integer('harga_barang');
            $table->integer('jumlah_barang');
            $table->integer('kurir_id');

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
        Schema::dropIfExists('pengirims');
    }
}
