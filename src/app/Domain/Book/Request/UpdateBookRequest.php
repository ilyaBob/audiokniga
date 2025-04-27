<?php

namespace Domain\Book\Request;

class UpdateBookRequest extends AbstractBookRequest
{
    public function rules(): array
    {
        return array_merge(parent::rules(), []);
    }
}
