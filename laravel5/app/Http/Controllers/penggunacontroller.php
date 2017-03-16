<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\buat_table_pengguna;
class penggunacontroller extends Controller
{
    public function awal()
  {
  	return "hello dari pengguna";
  }
  public function tambah()
  {
  	return $this-> simpan();
  }
  public function simpan()
  {
  	$buat_table_pengguna= new buat_table_pengguna();
  	$buat_table_pengguna->username='dina fadhiellah';
  	$buat_table_pengguna->password='1515015057';
  	$buat_table_pengguna->save();
  	return "data dengan username {$buat_table_pengguna->username} telah disimpan";
  }
}
