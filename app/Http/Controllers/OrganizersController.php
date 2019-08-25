<?php

namespace App\Http\Controllers;

use App\Models\Organizer;

class OrganizersController extends Controller {
	public function index() {
		$organizers = Organizer::get(['title', 'title_ru', 'title_eng', 'image', 'short__info', 'short__info_ru', 'short__info_eng']);

		if (\LaravelLocalization::getCurrentLocale() == 'hy') {
			$_title = 'Կազմակերպիչներ';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
			$_title = 'Организаторы';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
			$_title = 'Organizers';
		}

		return view('site.organizers')->with([
				'organizers' => $organizers,
				'_title'     => $_title,
			]);
	}
}
