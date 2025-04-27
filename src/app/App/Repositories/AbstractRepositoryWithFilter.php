<?php

namespace App\Repositories;

use App\Repositories\Traits\FilterTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

abstract class AbstractRepositoryWithFilter
{
    use FilterTrait;

    protected string|Model $model;

    public function filter(array $attribute, ?int $onPage = null): Collection|LengthAwarePaginator
    {
        $builder = $this->model::query();
        $builder = $this->filterParamHandle($attribute, $builder);
        if (isset($onPage)) {
            return $builder->paginate($onPage);
        }
        return $builder->get();
    }
}
