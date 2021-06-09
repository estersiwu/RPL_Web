<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanPrakpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_prakp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester');
            $table->char('tahun');
            $table->char('nim');
            $table->char('nik');
            $table->string('tools');
            $table->string('spesifikasi');
            $table->string('dokumen');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->text('alamat');
            $table->char('no_telp');
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
        Schema::dropIfExists('pengajuan_prakp');
    }
}
