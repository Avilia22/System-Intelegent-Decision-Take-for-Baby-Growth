<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DSSKeanggotaanController extends Controller
{
    public function index(){
        $dss_keanggotaan = DB::table('dss_keanggotaan')->get();
        return view('/data/dss_keanggotaan',['dss_keanggotaan' => $dss_keanggotaan]);
    
        }
        public function tambah()
    {
     
        return view('/form/form_dss_keanggotaan');
     
    }
    
    public function store(Request $request)
    {
        DB::table('dss_keanggotaan')->insert([
            'id' => $request->id,
            'batas_bawah' => $request->batas_bawah,
            'batas_tengah' => $request->batas_tengah,
            'batas_atas' => $request->batas_atas,
            'keterangan' => $request->keterangan,
            'id_variabel' => $request->id_variabel
    
        ]);
        return redirect('/data/dss_keanggotaan');
     
    }
    
    public function edit($id)
    {
        $dss_keanggotaan = DB::table('dss_keanggotaan')->where('id',$id)->get();
        return view('/form/edit_dss_keanggotaan',['dss_keanggotaan' => $dss_keanggotaan]);
     
    }
    
    public function update(Request $request)
    {
        DB::table('dss_keanggotaan')->where('id',$request->id)->update([
            'id' => $request->id,
            'batas_bawah' => $request->batas_bawah,
            'batas_tengah' => $request->batas_tengah,
            'batas_atas' => $request->batas_atas,
            'keterangan' => $request->keterangan,
            'id_variabel' => $request->id_variabel

        ]);
        return redirect('/data/dss_keanggotaan');
    }
    public function hapus($id)
    {
        DB::table('dss_keanggotaan')->where('id',$id)->delete();
        return redirect('/data/dss_keanggotaan');
    }
}
