<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_kp', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('semester', ['genap', 'ganjil']);
            $table->char('tahun');
            $table->string('judulkp');
            $table->char('nim');
            $table->char('nik');
            $table->string('tools');
            $table->string('spesifikasi');
            $table->string('dokumen');
            $table->string('penguji');
            $table->string('ruang');
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
        Schema::dropIfExists('form_kp');
    }
}
