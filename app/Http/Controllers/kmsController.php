<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kmsController extends Controller
{
   public function tambah(){
   		return view ('/form/form_kms'); 
   }
}
