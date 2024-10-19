<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email' =>'required|email|max:150',
            'phone' => 'required|numeric',
            'profession' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'about' => 'required|string',
            'facebook' => 'string',
            'linkedin' => 'string',
            'twitter' => 'string',
            'google' => 'string',
            'signas' => 'required|in:agency,customer,agent',
            //'profile_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', 
        ];
    }
}
