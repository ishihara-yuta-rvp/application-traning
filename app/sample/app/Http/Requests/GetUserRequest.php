<?php

namespace App\Http\Requests;

use App\Http\Requests\CommonRequest;
use Illuminate\Contracts\Validation\Validator;

class GetUserRequest extends CommonRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'code' => ['required']
        ];
    }
}
