<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
//            'name'=>'required|min:3|max:20|string',
//            'description'=>'required|min:3|max:255|string',
//            'image'=>'mimes:jpeg,jpg,png,gif|required|max:1024',
//            'years'=>'required|numeric',
//            'rating'=>'required|numeric',

        ];
    }
}
