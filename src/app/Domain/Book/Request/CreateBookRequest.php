<?php

namespace Domain\Book\Request;

class CreateBookRequest extends AbstractBookRequest
{
    public function rules(): array
    {
        return array_merge(parent::rules(), []);
    }
}
