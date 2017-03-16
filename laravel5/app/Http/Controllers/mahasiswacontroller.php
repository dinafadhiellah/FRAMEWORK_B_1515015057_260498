<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuatTableMahasiswa;
class mahasiswacontroller extends Controller
{
  public function awal()
  {
  	return "hello dari Mahasiswa";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$BuatTableMahasiswa= new BuatTableMahasiswa();
  	$BuatTableMahasiswa->save();
  }    //
}
