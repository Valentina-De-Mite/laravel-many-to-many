<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title'=> 'bail|nullable|string|max:50',
            'description' => 'bail|nullable|string|max:100',
            'cover_image' => 'bail|nullable|image|max:2000',
            'git_link' => 'bail|nullable|string|max:100',
            'link' => 'bail|nullable|string|max:100',
            'tecnologies_selected' => 'exists:tecnologies,id',
            'category_id' => 'exists:projects,id',

        ];
    }
}
