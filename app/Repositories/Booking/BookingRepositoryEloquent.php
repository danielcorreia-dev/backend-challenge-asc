<?php

namespace App\Repositories\Booking;

use App\Models\Booking;
use App\Repositories\BaseRepository;

class BookingRepositoryEloquent extends BaseRepository implements BookingRepositoryContract
{
    protected $model;

    public function __construct(Booking $property)
    {
        $this->model = $property;
    }
}
