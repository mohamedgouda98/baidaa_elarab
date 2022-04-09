<?php

namespace App\Http\Requests\Admin\PoeticType;

use App\Models\poetic_type;
use Illuminate\Foundation\Http\FormRequest;

class PoeticTypeUpdateRequest extends FormRequest
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
        return poetic_type::rules();
    }
}
