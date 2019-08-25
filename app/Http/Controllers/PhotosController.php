<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotosController extends Controller
{
    public function index(){
        $photos = Photo::orderBy('id','desc')->get(

            ['photo','photo_thumb'])->all();

            
        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = 'Նկարներ';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = 'Фотографии';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = 'Photos';
        }

        return view('site.photos')->with([
            'photos'=>$photos,
            '_title'=>$_title,
            ]);
    }
}
