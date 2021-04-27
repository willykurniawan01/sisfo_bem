<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table='anggota';
    protected $fillable=['nim','nama','jabatan','jenis_kelamin','picture','imei','email','no_hp'];
}
