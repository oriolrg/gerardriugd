<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projecte;
use \App\Imatge_paquet;
use \App\Nosaltres;
use App;
use Lang;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = Session::get('locale');
        if($locale == null){
            $locale = 'ca';
        }
        $projectes = Projecte::orderBy('data', 'desc')->get();
        $imatgePaket = Imatge_paquet::all();
        $nosaltres = Nosaltres::first();
        app()->setLocale($locale);
        foreach ($projectes as $key => $projecte) {
            $projecte->paquetImatge = Imatge_paquet::where('id_projecte', $projecte->id)->get();
        }
        return view('welcome')->with('projectes', $projectes)->with('nosaltres', $nosaltres);
    }
    public function nosaltres()
    {
        $locale = Session::get('locale');
        if($locale == null){
            $locale = 'ca';
        }
        $projectes = Projecte::orderBy('data', 'desc')->get();
        $imatgePaket = Imatge_paquet::all();
        $nosaltres = Nosaltres::first();
        app()->setLocale($locale);
        foreach ($projectes as $key => $projecte) {
            $projecte->paquetImatge = Imatge_paquet::where('id_projecte', $projecte->id)->get();
        }
        return view('nosaltres')->with('nosaltres', $nosaltres);
    }
    public function imatgesPakets($id, Request $request){
        $imatgePaket = Imatge_paquet::where('id_projecte', $id)->get('imatge');
        return $imatgePaket;
    }
}
