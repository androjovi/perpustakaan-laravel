<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_buku');
			$table->string('judul_buku');
			$table->string('kategori_buku');
			$table->string('pengarang_buku');
			$table->string('penerbit_buku');
			$table->integer('jumlah_halaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
