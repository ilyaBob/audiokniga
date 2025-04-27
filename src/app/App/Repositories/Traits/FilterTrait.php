<?php

namespace App\Repositories\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterTrait
{
    public function filterParamHandle(array $attribute, Builder $builder): Builder
    {
        return $this->filterBySort($attribute, $builder);
    }

    protected function filterBySort(array $attribute, Builder $builder): Builder
    {
        if (isset($attribute['sort'])) {
            if ($attribute['sort'][1] == 'ASC') {
                return $builder->orderBy($attribute['sort'][0], 'ASC');
            } else {
                return $builder->orderBy($attribute['sort'][0], 'DESC');
            }
        }

        return $builder->orderBy($this->getTable($builder) . '.id', 'DESC');
    }

    private function getTable(Builder $builder): string
    {
        return $builder->getModel()->getTable();
    }
}
