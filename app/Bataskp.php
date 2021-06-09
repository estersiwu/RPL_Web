<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bataskp extends Model
{
    protected $table ='bataskp';
    protected $fillable = ['nim','tanggal_mulai','tanggal_selesai'];
}
