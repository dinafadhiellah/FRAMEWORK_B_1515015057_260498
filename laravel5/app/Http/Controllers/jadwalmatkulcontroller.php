<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuatTableJadwalmatkul;
class jadwalmatkulcontroller extends Controller
{
  public function awal()
  {
  	return "hello dari jadwal matkul";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$BuatTableJadwalmatkul= new BuatTableJadwalmatkul();
  	$BuatTableJadwalmatkul->save();
  }    //
}
