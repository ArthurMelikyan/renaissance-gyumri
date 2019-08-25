<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index($id){
        $article = Article::findOrFail($id);
        $_meta_img = $article->image;
        if (\LaravelLocalization::getCurrentLocale() == 'hy') {
           $_title = $article->title;
           $_desc = $article->desc;
        }
        elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
            $_title = $article->title_ru;
            $_desc = $article->desc_ru;

        }
        elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
            $_title = $article->title_eng;
            $_desc = $article->desc_eng;

        } 
        return view('site.article')->with([
            'article'=>$article,
            '_meta_img' => $_meta_img,
            '_title' => $_title,
            '_desc'  => $_desc
        ]);
    }
}
