<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarBimbingan extends Model
{
    protected $table ='daftar_bimbingan';
    protected $fillable = ['nim','nama','judul','lembaga'];
}
