<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App;
use URL;
use Lang;

class LanguageController extends Controller
{
public function setLocale($locale='en'){
    if (!in_array($locale, ['en', 'ca', 'es'])){
        $locale = 'en';
    }
    Session::put('locale', $locale);
    App::setLocale($locale);
    //return Lang::getLocale();
    //return redirect()->action('HomeController@index');
    return redirect(url(URL::previous()));
    }
}