<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pressreview;
class ReviewsController extends Controller
{
    public function index(){
        $reviews = Pressreview::orderBy('id','desc')->paginate(8);

        
if (\LaravelLocalization::getCurrentLocale() == 'hy') {
    $_title = 'Մամուլի արձագանքներ';
} elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
    $_title = 'Отзывы пресс';
} elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
    $_title = 'Press reviews';
}

        return view('site.reviews')->with([
            'reviews'=>$reviews,
            '_title' => $_title
            ]);
    }
}
