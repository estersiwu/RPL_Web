<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormKetkpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_ketkp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester');
            $table->char('tahun');
            $table->char('nim');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->char('no_telp');
            $table->text('alamat');
            $table->char('fax');
            $table->string('dokumen');
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
        Schema::dropIfExists('form_ketkp');
    }
}
