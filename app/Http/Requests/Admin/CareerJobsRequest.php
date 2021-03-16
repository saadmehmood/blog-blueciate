<?php

namespace App\Http\Requests\Admin;

use App\Rules\CanBeAuthor;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CareerJobsRequest extends FormRequest
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
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->input('title'))
        ]);

        $this->merge([
            'posted_at' => Carbon::now(),
            'posted_by' => Auth::id()
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'posted_at' => 'nullable|date',
            'location' => 'required',
            'posted_by' => ['required', 'exists:users,id', new CanBeAuthor],
            'slug' => 'unique:posts,slug,' . (optional($this->careerJob)->id ?: 'NULL')
        ];
    }
}
