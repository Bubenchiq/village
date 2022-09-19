<?php

namespace App\Http\Requests\Admin\Users;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Update extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $availableRoles = Role::query()->where('name', '!=', 'admin')->pluck('name', 'id')->toArray();
        return [
            'name' => ['string', 'max:255'],
            'nickname' => ['required', 'max:255', 'unique:users,nickname'],
            'email' => ['email', 'max:255'],
            'password' => ['nullable','string', 'max:255'],
            'role' => ['exists:roles,id', Rule::in(array_keys($availableRoles)) ]
        ];
    }
}
