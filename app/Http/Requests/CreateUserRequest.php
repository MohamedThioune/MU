<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
       $rules = [
          'name'                  => 'required|min:2|max:50',
          'sex'                   => 'required',
          'age'                   => 'required',
          'firstName'             => 'required|min:2|max:30',
          'lastName'              => 'required|min:2|max:30',
          'email'                 => 'required|email|unique:users,email',
          'password'              => 'required|confirmed',
          'user_id'               => 'required',
       ];

        return $rules;
    }
}
