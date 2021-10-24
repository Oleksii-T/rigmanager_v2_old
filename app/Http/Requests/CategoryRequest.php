<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $slug = $this->category 
            ? 'unique:categories,slug,'.$this->category->id 
            : 'unique:categories,slug';

        return [
            'name' => 'required',
            'name.*' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'thread' => 'required',
            'image' => 'nullable|file|mimes:jpeg,jpg,png|max:1000',
            'slug' => 'required|string|max:70|'.$slug
        ];
    }
}
