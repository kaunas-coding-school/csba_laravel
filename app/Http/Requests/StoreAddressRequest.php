<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAddressRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country' => 'nullable|string|max:80',
            'city' => ['required','string','max:80'],
            'post_code' => 'nullable|string|max:7',
            'street' => 'required|string|max:255',
            'house' => 'nullable|string|max:10',
            'flat' => 'nullable|string|max:10',
        ];
    }
}
