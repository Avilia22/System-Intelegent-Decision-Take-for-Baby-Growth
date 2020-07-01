<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBalitaController extends Controller
{
   
    public function index()
    {
    	$balita = DB::table('balita')->get();

    	return view('/data/balita',['balita' => $balita]);

	}
	public function cari(Request $request)
	{
		$cari = $request->cari;
 		$balita = DB::table('balita')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    	return view('/data/balita',['balita' => $balita]);
 
	}
	public function tambah()
{
 
	return view('/form/form_balita');
 
}

public function store(Request $request)
{
	DB::table('balita')->insert([
		'id' => $request->id,
		'nama' => $request->nama,
		'tempat_lahir' => $request->tempat_lahir,
		'tanggal_lahir' => $request->tanggal_lahir,
		'gender' => $request->gender,
		'anak_ke' => $request->anak_ke


	]);
	return redirect('/data/balita');
 
}

public function edit($id)
{
	$balita = DB::table('balita')->where('id',$id)->get();
	return view('/form/edit_balita',['balita' => $balita]);
 
}

public function update(Request $request)
{
	DB::table('balita')->where('id',$request->id)->update([
		'id' => $request->id,
		'nama' => $request->nama,
		'tempat_lahir' => $request->tempat_lahir,
		'tanggal_lahir' => $request->tanggal_lahir,
		'gender' => $request->gender,
		'anak_ke' => $request->anak_ke
	]);
	return redirect('/data/balita');
}
public function hapus($id)
{
	DB::table('balita')->where('id',$id)->delete();
	return redirect('/data/balita');
}
}
