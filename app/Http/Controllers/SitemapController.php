<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projecte;
use \App\Imatge_paquet;
use App\Nosaltres;

class SitemapController extends Controller
{
    public function index()
    {
        $nosaltres= Nosaltres::all();
        $imatges= Imatge_paquet::all();
        $projectes = Projecte::all()->first();


        return response()->view('sitemap.index', [
            'nosaltres' => $nosaltres,
            'imatges' => $imatges,
            'projectes' => $projectes,

        ])->header('Content-Type', 'text/xml');
    }
    public function imatges()
    {
        $nosaltres= Nosaltres::all();
        $imatges= Imatge_paquet::all();
        $projectes = Projecte::all();


        return response()->view('sitemap.imatges', [
            'imatges' => $imatges,
            'projectes' => $projectes,

        ])->header('Content-Type', 'text/xml');
    }
    public function projectes()
    {
        $nosaltres= Nosaltres::all();
        $imatges= Imatge_paquet::all();
        $projectes = Projecte::all();


        return response()->view('sitemap.projectes', [
            'imatges' => $imatges,
            'projectes' => $projectes,

        ])->header('Content-Type', 'text/xml');
    }
}
