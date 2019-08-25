<?php

namespace App\Http\Requests;

class SliderRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		// only allow updates if the user is logged in
		return \Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'image'           => 'required',
			'image_title'     => 'required|max:220',
			'image_title_ru'  => 'required|max:220',
			'image_title_eng' => 'required|max:220',
			'image_text'      => 'required|max:220',
			'image_text_ru'   => 'required|max:220',
			'image_text_eng'  => 'required|max:220',
		];
	}
	/**
	 * Get the validation attributes that apply to the request.
	 *
	 * @return array
	 */
	public function attributes() {
		return [
			//
		];
	}

	/**
	 * Get the validation messages that apply to the request.
	 *
	 * @return array
	 */
	public function messages() {
		return [
			//
		];
	}
}
