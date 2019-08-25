<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
class VideosController extends Controller
{
    public function index(){
    $videos = Video::orderBy('id','desc')->paginate(12);
     


        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = 'Տեսանյութեր';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = 'Видео';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = 'Videos';
        }

        return view('site.videos')->with([
            'videos'=>$videos,
            '_title' => $_title
            ]);
    }
}
