<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataKmsControllerr extends Controller
{
    public function index(){
        //  $kms = DB::table('kms')->get();
        $kms= DB::table('kms')
        // ->join('balita', 'kms.id_balita', '=', 'balita.id')
        ->get();
        return view('/data/kms',['kms' => $kms]);
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
 		$kms = DB::table('kms')
        // ->join('balita', 'kms.id_balita', '=', 'balita.id')
        ->where('kms.id','like',"%".$cari."%")
		->paginate();
 
    	return view('/data/kms',['kms' => $kms]);
 
	}
    public function tambah()
{
	return view('/form/form_kms');
 
}

public function store(Request $request)
{
	DB::table('kms')->insert([
		'id' => $request->id,
		'id_balita' => $request->id_balita

	]);
	return redirect('/data/kms');
 
}

public function edit($id)
{
	$kms = DB::table('kms')->where('id',$id)->get();
	return view('/form/edit_kms',['kms' => $kms]);
}

public function update(Request $request)
{
	DB::table('kms')->where('id',$request->id)->update([
		'id' => $request->id,
		'id_balita' => $request->id_balita
	]);
	return redirect('/data/kms');
}
public function hapus($id)
{
	DB::table('kms')->where('id',$id)->delete();
	return redirect('/data/kms');
}
}
