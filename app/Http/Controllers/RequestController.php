<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

// use App\Models\Request;

class RequestController extends Controller {
	public function index(Request $request) {

		$requests_condition = \App\Models\Request::latest()->first();

		if ($request->isMethod('post')) {

			$data = $request->all();

			if ($data['phone_request'] == '') {
				$data['phone_request'] = 'այս դաշտը չի լրացրել';
			}

			$validator = Validator::make($data, [
					"name_request"      => "required|max:65",
					"email_request"     => "required|email|max:70",
					"phone_request"     => "required",
					"complited_request" => "required|mimes:jpeg,png,pdf,docx,doc,csv|max:1024",
					"photo"             => "required|mimes:jpeg,png|max:1024",
					"passportfile"      => "required|mimes:jpeg,png,pdf,docx,doc,csv|max:1024",
					"receipt"           => "required|mimes:jpeg,png,pdf,docx,doc,csv|max:1024",
				]);

			if ($validator->fails()) {
				$request->flash();
				return redirect()->route('request')->with('errors', $validator->errors()->all());
			}

			$result = Mail::send('email.email', ['data' => $data], function ($message) use ($data) {

					$message->from($data['email_request'],
						trim($data['name_request']),
						trim($data['email_request']),
						trim($data['phone_request']),
						$data['complited_request'],
						$data['photo'],
						$data['passportfile'],
						$data['receipt']
					);
					$message->to(config('mail.username'))
					->subject('Renaissance');
					$message->attach($data['complited_request']->getRealPath(), [
							'as'   => $data['complited_request']->getClientOriginalExtension(),
							'mime' => $data['complited_request']->getMimeType(),
						]);
					$message->attach($data['photo']->getRealPath(), [
							'as'   => $data['photo']->getClientOriginalExtension(),
							'mime' => $data['photo']->getMimeType(),
						]);
					$message->attach($data['passportfile']->getRealPath(), [
							'as'   => $data['passportfile']->getClientOriginalExtension(),
							'mime' => $data['passportfile']->getMimeType(),
						]);
					$message->attach($data['receipt']->getRealPath(), [
							'as'   => $data['receipt']->getClientOriginalExtension(),
							'mime' => $data['receipt']->getMimeType(),
						]);

				});

			if (count(Mail::failures()) == 0) {
				if ($validator->passes()) {
					session()    ->flash('success', true);
					return redirect()->route('request');
				}
			}

		}

		if (\LaravelLocalization::getCurrentLocale() == 'hy') {
			$_title = 'Ուղարկել հայտ';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'ru') {
			$_title = 'Отправить заявку';
		} elseif (\LaravelLocalization::getCurrentLocale() == 'en') {
			$_title = 'Send a request';
		}

		return view('site.request')->with([
				'_title'             => $_title,
				'requests_condition' => $requests_condition,
			]);
	}

}
