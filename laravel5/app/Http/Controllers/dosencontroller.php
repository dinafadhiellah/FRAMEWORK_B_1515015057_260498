<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuatTableDosen;
class dosencontroller extends Controller
{
   public function awal()
  {
  	return "hello dari dosen";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$BuatTableDosen= new BuatTableDosen();
  	$BuatTableDosen->save();
  } //
}
