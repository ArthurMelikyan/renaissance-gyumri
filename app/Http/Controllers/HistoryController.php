<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
class HistoryController extends Controller
{
    public function index(){
    $history = History::latest()->first();

        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
        $_title = $history['title'];
    } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
        $_title = $history['title_ru'];
    } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
        $_title = $history['title_eng'];
    }


        return view('site.history')->with([
            'history'=>$history,
            '_title' => $_title,
            '_desc' => $_title
            ]);
    }
}
