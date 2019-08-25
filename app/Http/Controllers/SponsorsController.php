<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
class SponsorsController extends Controller
{
    
    public function index(){
        $sponsors = Sponsor::get(['title','title_ru','title_eng','image']); 


        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = 'Հովանավորներ';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = 'Спонсоры';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = 'Sponsors';
        }

        return view('site.sponsors')->with([
            'sponsors'=>$sponsors,
            '_title' => $_title
            ]);
    }
}
