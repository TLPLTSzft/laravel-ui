<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCatRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $color = ['black', 'grey', 'brown', 'white', 'black & white', 'spotted', 'ginger'];

        return [
            'name' => 'required|string|max:50',
            'age' => 'required|integer|between:1,30',
            'tom_cat' => 'required|in:0,1',
            'color' => 'required|string|in_array:array_count_values($color)'
        ];
    }
}
