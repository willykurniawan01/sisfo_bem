<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table='kegiatan';
    protected $fillable=['kode_kegiatan','nama','jam_mulai','jam_selesai','tanggal_kegiatan'];
}
