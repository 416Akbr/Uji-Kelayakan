<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['id_petugas', 'username', 'password', 'nama_petugas', 'id_level';]
}
