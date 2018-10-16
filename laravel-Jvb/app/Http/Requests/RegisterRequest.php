<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=> 'required',
            'gender'=> 'required',
            'faculty'=> 'required',
            'birthday_year'=> 'required',
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Hay nhap ten',
        'gender.required'  => 'Hay chon gioi tinh', 
        'faculty.required' => 'Hay chon phan khoa',
        'birthday_year.required'  => 'Hay nhap nam sinh',
    ];
}
}
