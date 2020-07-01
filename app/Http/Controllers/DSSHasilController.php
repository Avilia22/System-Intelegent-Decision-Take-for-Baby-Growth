<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DSSHasilController extends Controller
{
    public function index(){
        $dss_hasil = DB::table('dss_hasil')->get();
        return view('/data/dss_hasil',['dss_hasil' => $dss_hasil]);
    
        }
        public function tambah()
    {
     
        return view('/form/form_dss_hasil');
     
    }
    
    public function store(Request $request)
    {
        DB::table('dss_hasil')->insert([
            'id' => $request->id,
            'id_variabel' => $request->id_variabel,
            'id_keanggotaan' => $request->id_keanggotaan,
            'alpha' => $request->alpha
    
        ]);
        return redirect('/data/dss_hasil');
     
    }
    
    public function edit($id)
    {
        $dss_hasil = DB::table('dss_hasil')->where('id',$id)->get();
        return view('/form/edit_dss_hasil',['dss_hasil' => $dss_hasil]);
     
    }
    
    public function update(Request $request)
    {
        DB::table('dss_hasil')->where('id',$request->id)->update([
            'id' => $request->id,
            'id_variabel' => $request->id_variabel,
            'id_keanggotaan' => $request->id_keanggotaan,
            'alpha' => $request->alpha
        ]);
        return redirect('/data/dss_hasil');
    }
    public function hapus($id)
    {
        DB::table('dss_hasil')->where('id',$id)->delete();
        return redirect('/data/dss_hasil');
    }
}
