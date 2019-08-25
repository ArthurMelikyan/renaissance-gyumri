<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NominationRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'nomination_category'  => 'required',
            'nomination_category_ru'  => 'required',
            'nomination_category_eng'  => 'required',
            'nomination_text' => 'required',
            'nomination_text_ru' => 'required',
            'nomination_text_eng' => 'required',
        ];
    }
/*

 */

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
