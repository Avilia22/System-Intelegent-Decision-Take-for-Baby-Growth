<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatusGiziController extends Controller
{
 public function index(){
    $status = DB::table('status_gizi')->get();
    return view('/data/status',['status' => $status]);

    }
	public function tambah()
{
 
	return view('/form/form_status');
 
}

public function store(Request $request)
{
	DB::table('status_gizi')->insert([
		'id' => $request->id,
		'status_gizi' => $request->status_gizi,
		'score' => $request->score,
		'jenis_kelamin' => $request->jenis_kelamin

	]);
	return redirect('/data/status');
 
}

public function edit($id)
{
	$status = DB::table('status_gizi')->where('id',$id)->get();
	return view('/form/edit_status',['status' => $status]);
 
}

public function update(Request $request)
{
	DB::table('status_gizi')->where('id',$request->id)->update([
		'id' => $request->id,
		'status_gizi' => $request->status_gizi,
		'score' => $request->score,
		'jenis_kelamin' => $request->jenis_kelamin
	]);
	return redirect('/data/status');
}
public function hapus($id)
{
	DB::table('status_gizi')->where('id',$id)->delete();
	return redirect('/data/status');
}
}
