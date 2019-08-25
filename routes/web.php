<?php

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
		Route::get('/', 'IndexController@index')->name('index');

		Route::get('news', 'AllArticlesController@index')->name('allNews');
		Route::get('news/{id}', 'ArticleController@index')->name('news');

		Route::get('photos', 'PhotosController@index')->name('photos');
		Route::get('videos', 'VideosController@index')->name('videos');
		Route::get('reviews', 'ReviewsController@index')->name('reviews');
		Route::get('nominations', 'NominationsController@index')->name('nominations');
		Route::get('rule', 'RulesController@index')->name('rules');
		Route::get('sponsors', 'SponsorsController@index')->name('sponsors');
		Route::get('timetable', 'TimetableController@index')->name('timetable');
		Route::get('juries', 'JuriesController@index')->name('juries');
		Route::get('staff', 'WorkersController@index')->name('workers');
		Route::get('history', 'HistoryController@index')->name('history');
		Route::get('conference', 'ConferenceController@index')->name('conference');
		Route::get('organizer', 'OrganizersController@index')->name('organizer');
		Route::match(['get', 'post'], 'request', 'RequestController@index')->name('request');

		Route::post('/contact', 'ContactController@index')->name('contact');

	});

Route::group(['prefix' => 'admin_page', 'middleware' => ['admin'], 'namespace' => 'Admin'], function () {
		CRUD::resource('article', 'ArticleCrudController');
		CRUD::resource('pressreview', 'PressreviewCrudController');
		CRUD::resource('photo', 'PhotoCrudController');
		CRUD::resource('video', 'VideoCrudController');
		CRUD::resource('nomination', 'NominationCrudController');
		CRUD::resource('rule', 'RuleCrudController');
		CRUD::resource('sponsor', 'SponsorCrudController');
		CRUD::resource('timetable', 'TimetableCrudController');
		CRUD::resource('jury', 'JuryCrudController');
		CRUD::resource('worker', 'WorkerCrudController');
		CRUD::resource('history', 'HistoryCrudController');
		CRUD::resource('conferance', 'ConferanceCrudController');
		CRUD::resource('slider', 'SliderCrudController');
		CRUD::resource('organizer', 'OrganizerCrudController');
		CRUD::resource('request', 'RequestCrudController');

		Route::post('password/reset', function () {
				abort('403');
			});
		Route::get('password/reset', function () {
				abort('403');
			});
		Route::post('password/reset/email', function () {
				abort('403');
			});
		Route::get('password/reset/{token}', function () {
				abort('403');
			});

	});

// Route::get('/clear-cache', function () {
// 		$exitCode = Artisan::call('cache:clear');
// 		return '<h1>Cache facade value cleared</h1>';
// 	});

// //Reoptimized class loader:
// Route::get('/optimize', function () {
// 		$exitCode = Artisan::call('optimize');
// 		return '<h1>Reoptimized class loader</h1>';
// 	});

// //Route cache:
// Route::get('/route-cache', function () {
// 		$exitCode = Artisan::call('route:cache');
// 		return '<h1>Routes cached</h1>';
// 	});

// //Clear Route cache:
// Route::get('/route-clear', function () {
// 		$exitCode = Artisan::call('route:clear');
// 		return '<h1>Route cache cleared</h1>';
// 	});

// //Clear View cache:
// Route::get('/view-clear', function () {
// 		$exitCode = Artisan::call('view:clear');
// 		return '<h1>View cache cleared</h1>';
// 	});

// //Clear Config cache:
// Route::get('/config-cache', function () {
// 		$exitCode = Artisan::call('config:cache');
// 		return '<h1>Clear Config cleared</h1>';
// 	});
