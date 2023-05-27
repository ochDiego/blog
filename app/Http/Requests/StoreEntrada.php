<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrada extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:5|max:100',
            'description'=>'required|min:10',
            'category'=>'required|min:3|max:100'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'El título es requerido',
            'description.required'=>'La descripción es requerida',
            'category.required'=>'La categoria es requerida',
            'title.min'=>'El título debe contener al menos 5 caracteres',
            'description.min'=>'La descrición debe contener al menos 10 caracteres',
            'category.min'=>'La categoria debe contener al menos 3 caracteres'
        ];
    }
}
