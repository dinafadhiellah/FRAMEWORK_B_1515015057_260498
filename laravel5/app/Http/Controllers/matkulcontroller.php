<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuatTableMatkul
class matkulcontroller extends Controller
{
  public function awal()
  {
  	return "hello dari Matkul";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$BuatTableMatkul= new BuatTableMatkul();
  	$BuatTableMatkul->save();
  }    //
}
