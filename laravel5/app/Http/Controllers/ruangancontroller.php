<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuatTableRuangann
class ruangancontroller extends Controller
{
  public function awal()
  {
  	return "hello dari Ruangan";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$BuatTableRuangann= new BuatTableRuangann();
  	$BuatTableRuangann->save();
  }    //
}
