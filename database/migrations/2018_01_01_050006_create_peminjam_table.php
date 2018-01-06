<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjam', function (Blueprint $table) {
            $table->string('nomor_kartu');
			$table->string('kode_buku');
			$table->string('dari_tanggal');
			$table->string('sampai_tanggal');
			$table->integer('status_pengembalian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjam');
    }
}
