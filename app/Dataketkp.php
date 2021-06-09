<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataketkp extends Model
{
    protected $table ='pengajuan_ketkp';
    protected $fillable = ['semester','tahun','nim','lembaga','pimpinan','no_telp','alamat','fax','dokumen'];
}
