<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMataKuliah extends Model
{
    protected $table = 'dosenmatkul';
    protected $fillable = ['dosen_id','matakuliah_id'];
}
