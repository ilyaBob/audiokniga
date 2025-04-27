<?php

namespace Domain\Book;

use Domain\Book\Factory\BookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image_id',
        'description',
        'is_active',
        'age',
        'time',
        'cycle_number',
        'cycle_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function newFactory(): BookFactory
    {
        return BookFactory::new();
    }
}
