<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHeadsetRequest extends FormRequest
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
            'brand' => 'required|string|max:50',
            'connection' => 'required|string|in:' . implode(',', $connection),
            'priceUSD' => 'required|integer|between:10,10000',
            'making' => 'required|date'
        ];
    }
}
