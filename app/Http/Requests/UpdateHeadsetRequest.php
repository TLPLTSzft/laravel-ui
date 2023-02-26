<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeadsetRequest extends FormRequest
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
        $connection = ['Jack', 'USB', 'Wireless', 'Jack / USB', 'Jack / Wireless', 'USB / Wireless', 'Jack / USB / Wireless'];

        return [
            'brand' => 'string|max:50',
            'connection' => 'string|in_array:array_count_values($connection)',
            'priceUSD' => 'integer|between:10,10000',
            'date' => 'date|date_format:Y-m-d'
        ];
    }
}
