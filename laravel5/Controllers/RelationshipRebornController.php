<?php

namespace App\Http\Controllers;

use App\Dosen;

class  RelationshipRebornController extends Controller
{
   public function ujiHas()
   {
   	return Dosen::has('dosen_matakuliah')->get();
   }
}
