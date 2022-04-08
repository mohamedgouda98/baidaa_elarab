<?php

namespace App\Http\Requests\Admin\Poet;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class PoetUpdateRequest extends FormRequest
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
    #[ArrayShape(['name' => "string", 'birthday' => "string", 'title' => "string", 'info' => "string", 'country' => "string"])] public function rules()
    {
        return [
            'name'     => 'required|string|min:3',
            'birthday' => 'required|date',
            'title'    => 'required|string|min:3',
            'info'     => 'required|string',
            'country'  => 'required|exists:countries,id'
        ];
    }
}
