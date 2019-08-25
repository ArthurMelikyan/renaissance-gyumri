<?php

namespace App\Http\Requests;

class ArticleRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest {
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
			'title'        => 'required|max:190',
			'title_eng'    => 'required|max:190',
			'title_ru'     => 'required|max:190',
			'desc'         => 'required|max:190',
			'desc_eng'     => 'required|max:190',
			'desc_ru'      => 'required|max:190',
			'image'        => 'required',
			'little_image' => 'required',
			'text'         => 'required',
			'text_eng'     => 'required',
			'text_ru'      => 'required',
			'published_at' => 'required',
		];
	}

	/**
	 * Get the validation attributes that apply to the request.
	 *
	 * @return array
	 */
	public function attributes() {
		return [

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
