<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemeriksaanController extends Controller
{
    public function tambah(){
		return view ('/form/form_pemeriksaan'); 
	}
}
