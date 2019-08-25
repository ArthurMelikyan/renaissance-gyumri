<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PressreviewRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:170',
            'title_ru' => 'required|max:170',
            'title_eng' => 'required|max:170',
            'text' => 'required|max:200',
            'text_eng' => 'required|max:200',
            'text_ru' => 'required|max:200',
            'link' => 'required|max:200',
            'little_image' => 'required',
            'agency' => 'required|max:50',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
