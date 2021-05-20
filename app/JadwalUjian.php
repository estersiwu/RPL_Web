<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    protected $table ='jadwal_ujian';
    protected $fillable = ['ruang','tanggal','jam','dosen_penguji'];
}
