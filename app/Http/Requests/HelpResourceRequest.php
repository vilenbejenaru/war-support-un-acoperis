<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class HelpResourceRequest
 * @package App\Http\Requests
 */
class HelpResourceRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:128'],
            'country' => ['required', 'exists:countries,id'],
            'city' => ['required', 'string', 'min:3', 'max:64'],
            'address' => ['nullable', 'string', 'min:5', 'max:256'],
            'phone' => ['required', 'phone:RO', 'string', 'max:16'],
            'email' => ['required', 'email', 'min:5', 'max:64'],
            'help' => ['required'],
            'other' => ['nullable', 'string', 'min:2', 'max:256'],
        ];
    }
}