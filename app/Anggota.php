<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable=['nim','nama','jabatan','jenis_kelamin','picture','imei','email','no_hp'];
}
