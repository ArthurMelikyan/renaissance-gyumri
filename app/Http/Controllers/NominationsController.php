<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomination;
class NominationsController extends Controller
{
    public function index(){
        $nominations = Nomination::get()->all(); 

        
    if (\LaravelLocalization::getCurrentLocale() == 'hy') {
        $_title = 'Անվանակարգեր';
    } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
        $_title = 'Номинации';
    } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
        $_title = 'Nominations';
    }

        return view('site.nominations')->with([
            'nominations'=>$nominations,
            '_title' => $_title
            ]);
    }
}
