<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statusController extends Controller
{
    public function tambah(){
		return view ('/form/form_kalkulator'); 
	}
}
