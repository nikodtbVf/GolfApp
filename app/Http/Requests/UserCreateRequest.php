<?php

namespace AppGolf\Http\Requests;

use AppGolf\Http\Requests\Request;

class UserCreateRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' =>'required',
        ];
    }
}