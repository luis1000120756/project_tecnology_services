<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'imagesPath.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ];
        $imagePaths = [];

        if ($request->hasFile('imagesPath')) {
            foreach ($request->file('imagesPath') as $image) {
                $path = $image->store('products', 'public');
                $imagePaths[] = $path;
            }
        }
    }
}
