<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarRegis_kp extends Model
{
    protected $table ='pengajuan_kp';
    protected $fillable = ['semester','tahun','nim','nik','judulkp','tools','spesifikasi','dokumen','lembaga','pimpinan','alamat','no_telp'];
}
