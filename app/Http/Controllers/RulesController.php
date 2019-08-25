<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
class RulesController extends Controller
{
    public function index(){
        $onerule = Rule::latest()->get()->first(); 


        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = 'Կանոնակարգ';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = 'Правила';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = 'Rules';
        }


        return view('site.rules')->with([
            'onerule'=>$onerule,
            '_title' =>$_title
            ]);
    }
}
