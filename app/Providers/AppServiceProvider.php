<?php

namespace App\Providers;

use App\Models\Slider;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		\Schema::defaultStringLength(191);

		view()->composer('layouts.carousel', function ($view) {
				$view->with('sliders', Slider::orderBy('id', 'desc')->take(4)->get(

						['id', 'image', 'image_title', 'image_title_ru', 'image_title_eng',
							'image_text', 'image_text_ru', 'image_text_eng',
						]));
			});

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
