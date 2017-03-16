<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuatTableDosenmatkul;
class dosenmatkulcontroller extends Controller
{
   public function awal()
  {
  	return "hello dari dosenmatkul";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$BuatTableDosenmatkul= new BuatTableDosenmatkul();
  	$BuatTableDosenmatkul->save();
  }   //
}
