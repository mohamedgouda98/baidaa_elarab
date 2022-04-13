<?php

namespace App\Http\Requests\Admin\Poet;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class PoetStoreRequest extends FormRequest
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
    #[ArrayShape(['name' => "string", 'special' => "string", 'description' => "string", 'info' => "string", 'country' => "string", 'era' => "string", 'image' => "string"])] public function rules(): array
    {
        return [
            'name'           => 'required|string|min:3',
            'special'        => 'required|string',
            'description'    => 'required|string|min:3',
            'country'        => 'required|exists:countries,id',
            'era'            => 'required|exists:eras,id',
            'image'          => 'required|file|mimes:png,jpg,jpeg,webp'
        ];
    }
}
