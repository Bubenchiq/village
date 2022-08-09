<?php

namespace App\Http\Requests;

use App\Rules\CheckCurrentPassword;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname' => ['string', 'max:55'],
            'current_password' => ['required', new CheckCurrentPassword],
            'password' => ['nullable', 'required_with:password_confirmation', 'confirmed'],

        ];
    }
}
