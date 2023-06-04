<?php

namespace App\Repositories\Property;

use App\Models\Property;
use App\Repositories\BaseRepository;

class PropertyRepositoryEloquent extends BaseRepository implements PropertyRepositoryContract
{
    protected $model;

    public function __construct(Property $property)
    {
        $this->model = $property;
    }
}
