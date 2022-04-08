<?php

namespace App\Http\Requests\Admin\country;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class CountryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    #[ArrayShape(['old_name' => "string", 'current_name' => "string"])] public function rules(): array
    {
        return [
            'old_name'     => 'required|string|min:3',
            'current_name' => 'required|string|min:3',
        ];
    }
}
