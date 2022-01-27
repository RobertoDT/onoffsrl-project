<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AnagSistemi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //prendere dati dalla tabella anagraficasistemi e mostrarli alla view
        //$anagrafiche = AnagSistemi::all();
        //$anagrafiche = DB::table('anagraficasistemi')->where('citta_installazione', 'San Benedetto Del Tronto')->get();
        $anagrafiche = DB::table('anagraficasistemi')->get();
        $mioArray = [];

        foreach($anagrafiche as $anagrafica){
            $mioArray[$anagrafica->citta_installazione][$anagrafica->via][] = $anagrafica;
           //var_dump($anagrafica->idSistema);
        }
        dd($mioArray);

        //$user = auth()->user();
        //return view('home', compact('user'));
        return view('home', compact('anagrafiche'));
    }

    /*public function test()
    {
        $user = auth()->user();
        return view('testhome', compact('user'));
    }*/

}
