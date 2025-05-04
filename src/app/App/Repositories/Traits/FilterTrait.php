<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterTrait
{
    public function filterParamHandle(array $attribute, Builder $builder): Builder
    {
        $builder = $this->filterBySort($attribute, $builder);
        return $builder;
    }

    protected function filterBySort(array $attribute, Builder $builder)
    {
        if (isset($attribute['sort'])) {
            $column = $attribute['sort'][0];
            $direction = strtoupper($attribute['sort'][1]) === 'ASC' ? 'ASC' : 'DESC';

            return $builder->orderBy($column, $direction);
        }

        return $builder->orderBy($this->getTable($builder) . '.id', 'DESC');
    }

    private function getTable(Builder $builder): string
    {
        return $builder->getModel()->getTable();
    }
}
