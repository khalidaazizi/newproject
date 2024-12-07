<?php

namespace App\Http\Requests\form;

use Illuminate\Foundation\Http\FormRequest;

class createFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'fullName'=>'required|string',
           'age' => 'required|integer|min:18|max:40',
           'email' => 'required|email|unique:validations,email',
           'password' => 'required|confirmed|min:6|max:15',
           'phoneNumber' =>'required|regex:/^07[0-9]{8}$/',
           'birthday' => 'required|date|before:today',
           'dead_day' => 'required|date|after:today',
           'gender' => 'required|in:male,female',
           'address' => 'required|',
           'files'=> 'required|file|',
           'image' => 'required|file|mimes:jpg,jpeg,png',
           'country' => 'required|string',
           'experience' => 'array',
           'terms' => 'required|boolean|accepted',

        ];
    }
}
