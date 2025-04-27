<?php

namespace Domain\Book;

use App\Repositories\AbstractRepositoryWithFilter;
use Illuminate\Database\Eloquent\Model;

class BookRepository extends AbstractRepositoryWithFilter
{

   protected string|Model $model = Book::class;
}
