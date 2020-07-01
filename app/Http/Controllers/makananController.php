<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makananController extends Controller
{
    public function lihat(){
    	return view ('/card/makanan'); 
    }
    public function brokoli(){
    	return view ('/card/brokoli');
    }
    public function almond(){
    	return view ('/card/almond');
    }
    public function alpukat(){
    	return view ('/card/alpukat');
    }
    public function bayam(){
    	return view ('/card/bayam');
    }
    public function berasmerah(){
    	return view ('/card/berasmerah');
    }
    public function ikan(){
    	return view ('/card/ikan');
    }
    public function jagung(){
    	return view ('/card/jagung');
    }
    public function kentang(){
    	return view ('/card/kentang');
    }
    public function pisang(){
    	return view ('/card/pisang');
    }
    public function tomat(){
    	return view ('/card/tomat');
    }
    public function udang(){
    	return view ('/card/udang');
    }
    public function wortel(){
    	return view ('/card/wortel');
    }
}
