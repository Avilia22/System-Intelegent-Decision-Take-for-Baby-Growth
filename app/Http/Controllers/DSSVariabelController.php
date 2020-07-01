<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DSSVariabelController extends Controller
{
    public function index(){
        $dss_variabel = DB::table('dss_variabel')->get();
        return view('/data/dss_variabel',['dss_variabel' => $dss_variabel]);
    
        }
        public function tambah()
    {
     
        return view('/form/form_dss_variabel');
     
    }
    
    public function store(Request $request)
    {
        DB::table('dss_variabel')->insert([
            'id' => $request->id,
            'nama_variabel' => $request->nama_variabel,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_urut' => $request->no_urut
    
        ]);
        return redirect('/data/dss_variabel');
     
    }
    
    public function edit($id)
    {
        $dss_variabel = DB::table('dss_variabel')->where('id',$id)->get();
        return view('/form/edit_dss_variabel',['dss_variabel' => $dss_variabel]);
     
    }
    
    public function update(Request $request)
    {
        DB::table('dss_variabel')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama_variabel' => $request->nama_variabel,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_urut' => $request->no_urut
        ]);
        return redirect('/data/dss_variabel');
    }
    public function hapus($id)
    {
        DB::table('dss_variabel')->where('id',$id)->delete();
        return redirect('/data/dss_variabel');
    }
}
