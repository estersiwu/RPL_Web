<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarBimbingan extends Model
{
    protected $table ='pengajuan_kp';
    protected $fillable = ['nim','judulkp','lembaga'];
}
