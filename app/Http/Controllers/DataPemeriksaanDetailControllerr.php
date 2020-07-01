<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataPemeriksaanDetailControllerr extends Controller
{
    public function index()
    {
    	$detail = DB::table('pemeriksaan_detail')->get();

    	return view('/data/pemeriksaan_detail',['detail' => $detail]);

    }
    public function tambah()
{
 
	return view('/form/form_pemeriksaandetail');
 
}

public function store(Request $request)
{
	DB::table('pemeriksaan_detail')->insert([
		'id' => $request->id,
		'id_pemeriksaan' => $request->id_pemeriksaan,
		'zscore_total' => $request->zscore_total,
		'status_pemeriksaan' => $request->status_pemeriksaan


	]);
	return redirect('/data/pemeriksaan_detail');
 
}

public function edit($id)
{
	$detail = DB::table('pemeriksaan_detail')->where('id',$id)->get();
	return view('/form/edit_pemeriksaandetail',['detail' => $detail]);
 
}

public function update(Request $request)
{
	DB::table('pemeriksaan_detail')->where('id',$request->id)->update([
		'id' => $request->id,
		'id_pemeriksaan' => $request->id_pemeriksaan,
		'zscore_total' => $request->zscore_total,
		'status_pemeriksaan' => $request->status_pemeriksaan
	]);
	return redirect('/data/pemeriksaan_detail');
}
public function hapus($id)
{
	DB::table('pemeriksaan_detail')->where('id',$id)->delete();
	return redirect('/data/pemeriksaan_detail');
}
}
