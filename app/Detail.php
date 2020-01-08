<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
   protected $table = 'detail';
   protected $fillable = ['id_detail', 'id_inventaris', 'jumlah'];
}
