<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class AllArticlesController extends Controller
{
    public function index(){
        $articles = Article::orderBy('id','desc')->paginate(8);

        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
            $_title = 'Բոլոր նորությունները';
            $_desc = 'Վերածնունդ փառատոնի մասին բոլոր նորություններն այստեղ';
        } elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = 'Все новости';
            $_desc = 'Все новости фестиваля. ВОЗРОЖДЕНИЕ';

        } elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = 'All news';
            $_desc = 'All news about the festival. RENAISSANCE';
        }



        
        return view('site.articles')->with([
            'articles'=>$articles,
            '_title' => $_title,
            '_desc'  => $_desc
            ]);
    }
}
