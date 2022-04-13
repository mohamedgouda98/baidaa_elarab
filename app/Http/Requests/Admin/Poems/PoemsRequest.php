<?php

namespace App\Http\Requests\Admin\Poems;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class PoemsRequest extends FormRequest
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
    #[ArrayShape(['title' => "string", 'body' => "string", 'description' => "string", 'verses_count' => "string", 'poet' => "string", 'poetic_type' => "string"])] public function rules(): array
    {
        return [
            'title'        => 'required|string',
            'body'         => 'required|string',
            'description'  => 'required|string',
            'verses_count' => 'required|numeric',
            'poet'         => 'required|exists:poets,id',
            'poetic_type'  => 'required|exists:poetic_types,id',
        ];
    }
}
