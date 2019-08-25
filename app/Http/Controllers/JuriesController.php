<?php

namespace App\Http\Controllers;

use App\Models\Jury;

class JuriesController extends Controller {
	public function index() {
		$jury = Jury::latest()->first();

		if (\LaravelLocalization::getCurrentLocale() == 'hy') {
			$_title = 'ժյուրիներ';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
			$_title = 'Жюри';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
			$_title = 'Juries';
		}

		return view('site.jury')->with([
				'jury'   => $jury,
				'_title' => $_title,
			]);
	}
}
