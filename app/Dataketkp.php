<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataketkp extends Model
{
    protected $table ='form_ketkp';
    protected $fillable = ['semester','tahun','nim','lembaga','pimpinan','no_telp','alamat','fax','dokumen'];
}
