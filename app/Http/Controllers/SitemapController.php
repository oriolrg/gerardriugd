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
    public function generate()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/') . '</loc>';
        $sitemap .= '<lastmod>' . now()->toDateString() . '</lastmod>';
        $sitemap .= '<changefreq>monthly</changefreq>';
        $sitemap .= '<priority>1.0</priority>';
        $sitemap .= '</url>';
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/brandeador') . '</loc>';
        $sitemap .= '<changefreq>yearly</changefreq>';
        $sitemap .= '<priority>0.7</priority>';
        $sitemap .= '</url>';
        $sitemap .= '</urlset>';

        return response($sitemap, 200)
                ->header('Content-Type', 'application/xml');
    }
}
