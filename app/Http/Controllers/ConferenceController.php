<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conferance;
class ConferenceController extends Controller
{
    public function index(){
        $conferance = Conferance::latest()->first();

        $_meta_img = $conferance['image'];
        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = $conferance['title'];
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = $conferance['title_ru'];
        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = $conferance['title_eng'];
        }

        return view('site.conferance',[
            'conferance' => $conferance,
            '_meta_img' => $_meta_img,
            '_title' => $_title,
            '_desc' => $_title,
        ]);
    }
}
