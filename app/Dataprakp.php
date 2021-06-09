<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataprakp extends Model
{
    protected $table ='pengajuan_prakp';
    protected $fillable = ['semester','tahun','nim','nik','tools','spesifikasi','dokumen','lembaga','pimpinan','alamat','no_telp'];
}
