<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\otos;

class LottoController extends Controller
{
    public function Welcome(){
        ## SELECT nev FROM otos GROUPBY ev
        return view('welcome',[
            'result' => otos::select('ev')
                            ->groupBy('ev')
                            ->get()
        ]);
    }

    public function ev($p){
        return view('ev',[
            'result' => otos::select('id','het')
                            -> where('ev',$p)
                            -> get(),
            'ev' => $p
        ]);
    }
    public function adatlap($id){
        return view('adatlap',[
            'result' => otos::find($id)
        ]);
    }
    public function Mikor(){
        return view('Mikor',[
            'result' => otos::select('ev','het','talalat5_db','talalat5_huf')
                        ->where('talalat5_db','>',0)
                        ->where('ev','>',1998)
                        ->get(),
            'sv' => 1,

        ]);
    }
    public function Tipp(){
        $tippek = [];
        $i = 0;
        while(count($tippek) < 5){
            $rnd = rand(1,90);
            if(!in_array($rnd, $tippek)){
                $tippek[$i] = $rnd;
                $i++;
            }
        }
        sort($tippek);
        return view('Tipp',[
            'result' => $tippek
        ]);
    }
}
