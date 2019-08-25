<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller {
	public function index() {
		$articles = Article::orderBy('id', 'desc')->take(8)->get(
			[
				'id', 'title', 'desc', 'published_at', 'little_image',
				'title_ru', 'title_eng', 'desc_eng', 'desc_ru',
			]);

		// $photos = Photo::orderBy('id','desc')->take(8)->get(
		//     ['photo','photo_thumb']
		// );

		if (\LaravelLocalization::getCurrentLocale() == 'hy') {
			$_title = 'Գլխավոր';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
			$_title = 'Главная';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
			$_title = 'Home';
		}

		return view('site.index')->with([
				'articles' => $articles,
				// 'photos'=> $photos,
				'_title' => $_title,
			]);
	}
}
