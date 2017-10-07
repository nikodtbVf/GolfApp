<?php

namespace AppGolf\Http\Requests;

use AppGolf\Http\Requests\Request;

class ModuleCreateRequest extends Request
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
            'nombre' => 'required',
            'numero' => 'required|unique:modulos|integer',
        ];
    }
}
