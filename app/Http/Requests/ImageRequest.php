<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'name' => '',
            'image-index-left' => 'mimes:jpeg,png,jpg,webp|max:8192',
            'image-index-right' => 'mimes:jpeg,png,jpg,webp|max:8192',
            'image-studio-top' => 'mimes:jpeg,png,jpg,webp|max:8192',
            'image-studio-bottom' => 'mimes:jpeg,png,jpg,webp|max:8192',
            'image-studio-stefan' => 'mimes:jpeg,png,jpg,webp|max:8192',
            'image-studio-cynthia' => 'mimes:jpeg,png,jpg,webp|max:8192',
        ];
    }
}
