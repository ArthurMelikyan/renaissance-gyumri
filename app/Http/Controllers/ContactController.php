<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

class ContactController extends Controller {
	public function index(Request $request) {
		if ($request->isMethod('post')) {

			$datacontact = $request->all();
			if ($datacontact['phone'] == '') {
				$datacontact['phone'] = 'այս դաշտը չի լրացրել';
			}
			$messages = [
				'name.required'    => '<ul><li>Անունը պարտադիր է <br>Поле имени обязателен к заполнению<br>Name field is required</li></ul>',
				'email.required'   => '<ul><li>Էլ․ հասցեն պարտադիր է<br>Поле email обязателен к заполнению<br>Email field is required</li></ul>',
				'message.required' => '<ul><li>Խնդրում ենք գրել նամակը<br>Поле сообщений  обязателен к заполнению<br>Message field is required</li></ul>',
				'email.email'      => '<ul><li>Էլեկտրոնային հասցեն վավեր չէ<br>Адрес электронной почты не валиден<br>Email is not valid</li></ul>',

			];
			$validator = Validator::make($datacontact, [
					"name"  => "required",
					"email" => "required|email",
					// "phone" => "required",
					"message" => "required",
				], $messages);

			if ($validator    ->fails()) {
				return response()->json(['error' => $validator->errors()->all()]);
			}

			$result = Mail::send('email.email2', ['datacontact' => $datacontact], function ($message) use ($datacontact) {
					$message->from($datacontact['email'],
						trim($datacontact['name']),
						trim($datacontact['email']),
						trim($datacontact['phone']),
						trim($datacontact['message'])
					);
					$message->replyTo($datacontact['email'], 'Mr. Example');
					$message->to(config('mail.username'))
					->subject('Renaissance');

				});

			if (count(Mail::failures()) == 0) {
				if ($validator    ->passes()) {
					return response()->json(['success' => true]);
				}
			}

		}
		return view('layouts.contact');
	}
}
