<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractIndexRequestWithFilter extends FormRequest
{
    public array $sortableFields = [];

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'sort' =>
                [
                    'sometimes',
                ]
        ];
    }
}
