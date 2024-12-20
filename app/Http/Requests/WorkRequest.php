<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'title' => 'required',
            'subtitle' => 'required',
            'category' => 'required',
            'type' => 'required',
            'date' => 'required',
            'url' => 'nullable',
            'description' => 'required',
            'online' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp,mp4|max:8192',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:8192'
        ];
    }
}
