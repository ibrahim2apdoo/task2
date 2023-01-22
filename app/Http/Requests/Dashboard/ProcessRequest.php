<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProcessRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'icon' => 'nullable|string',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string', Rule::unique('process_translations', 'title')->ignore($this->id, 'process_id')]];
            $rules += [$locale . '.sub_description' => ['nullable', 'string','max:200']];
        }

        return $rules;
    }
}
