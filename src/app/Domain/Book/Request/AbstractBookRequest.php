<?php

namespace Domain\Book\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class AbstractBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        return $this->merge([
            'slug' => Str::slug($this->title),
            'image_id' => 1,
            'is_active' => isset($this->is_active)
        ]);
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'slug' => 'required|string',
            'image_id' => 'required|int',
            'description' => 'nullable|string',
            'is_active' => 'nullable|bool',
            'age' => 'required|int:max:3000',
            'time' => 'required|string',
            'cycle_number' => 'nullable|int:max:100',
//            'cycle_id' => 'nullable|int|exists:cycles,id',
        ];
    }
}
