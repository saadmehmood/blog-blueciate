<?php

namespace App\Http\Requests;

use App\Rules\AlphaName;
use Illuminate\Foundation\Http\FormRequest;

class JobApplicationsRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255', new AlphaName],
            'last_name' => ['required', 'string', 'max:255', new AlphaName],
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'resume' => 'required|file'
        ];
    }
}
