<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buat_table_pengguna extends Model
{
   protected $table = 'pengguna'; 
   protected $fillable = ['username','password'];//
}
