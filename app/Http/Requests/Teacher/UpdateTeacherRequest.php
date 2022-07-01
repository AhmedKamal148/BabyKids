<?php

namespace App\Http\Requests\Teacher;

use App\Http\Controllers\AdminControllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
        return Teacher::UpdateTeacherRuels();
    }
}
