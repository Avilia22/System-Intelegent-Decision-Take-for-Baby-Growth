<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPemeriksaanControllerr extends Controller
{
    public function index(){
    	$pemeriksaan = DB::table('pemeriksaan')->get();
    	return view('/data/pemeriksaan',['pemeriksaan' => $pemeriksaan]);
	}
	public function cari(Request $request)
	{
		$cari = $request->cari;
 		$pemeriksaan = DB::table('pemeriksaan')
		->where('id','like',"%".$cari."%")
		->paginate();
 
    	return view('/data/pemeriksaan',['pemeriksaan' => $pemeriksaan]);
 
	}
    public function tambah()
{
 
	return view('/form/form_pemeriksaan');
 
}

public function store(Request $request)
{
	DB::table('pemeriksaan')->insert([
		'id' => $request->id,
		'id_kms' => $request->id_kms,
		'id_kader' => $request->id_kader,
		'tgl_periksa' => $request->tgl_periksa,
		'berat_badan' => $request->berat_badan,
		'tinggi_badan' => $request->tinggi_badan


	]);
	return redirect('/data/pemeriksaan');
 
}

public function edit($id)
{
	$pemeriksaan = DB::table('pemeriksaan')->where('id',$id)->get();
	return view('/form/edit_pemeriksaan',['pemeriksaan' => $pemeriksaan]);
 
}

public function update(Request $request)
{
	DB::table('pemeriksaan')->where('id',$request->id)->update([
		'id' => $request->id,
		'id_kms' => $request->id_kms,
		'id_kader' => $request->id_kader,
		'tgl_periksa' => $request->tgl_periksa,
		'berat_badan' => $request->berat_badan,
		'tinggi_badan' => $request->tinggi_badan
	]);
	return redirect('/data/pemeriksaan');
}
public function hapus($id)
{
	DB::table('pemeriksaan')->where('id',$id)->delete();
	return redirect('/data/pemeriksaan');
}
}
