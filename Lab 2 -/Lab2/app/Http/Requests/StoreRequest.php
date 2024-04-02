<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
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
            'title' => ['required', 'max:30'],
            'body' => ['required', 'max:255'],
            'published' => ['required', 'boolean'],
            'image' => ['nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048']

        ];
    }
}
