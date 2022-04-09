<?php

namespace App\Http\Requests\Admin\era;

use App\Models\era;
use Illuminate\Foundation\Http\FormRequest;

class EraStoreRequest extends FormRequest
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
        return era::rules();
    }
}
