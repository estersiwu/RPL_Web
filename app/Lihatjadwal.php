<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lihatjadwal extends Model
{
    protected $table ='jadwal_ujian';
    protected $fillable = ['nim','ruang','tanggal','jam','dosen_penguji'];
}
