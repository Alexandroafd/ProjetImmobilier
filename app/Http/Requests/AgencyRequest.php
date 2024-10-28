<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgencyRequest extends FormRequest
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
                'name' => 'string|required|min:8',
                'description' => 'string|required',
                'ceo' => 'string|required|min:8',
                'email' =>'string|required|email|unique:agent,email',
                'phone' => 'integer|required|min:8',
                'skype' => 'string',
                'address' => 'string|required',
                'country' => 'string|required',
                'city' => 'string|required',
                'postal_code' => 'string|required',
                'facebook' => 'string|required',
                'twitter' => 'string|required',
                'instagram' => 'string|required',
                'linkedin' => 'string|required',
                'stab' => 'integer|required|min:4',
                'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg,gif|max:2000'
        ];
    }
}