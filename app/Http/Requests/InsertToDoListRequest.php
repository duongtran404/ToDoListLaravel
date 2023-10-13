<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Providers;
class InsertToDoListRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => ['description','text'],
            'begin_date' => ['begin_date','date','ngay_hom_truoc_lon_hon:end_date'],
            'end_date' => ['end_date','date']
        ];
    }
}
