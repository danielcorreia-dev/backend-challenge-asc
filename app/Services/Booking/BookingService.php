<?php

namespace App\Services\Booking;

use App\Services\Booking\BookingServiceContract;

class BookingService implements BookingServiceContract
{
    protected $bookingRepository;

    public function __construct(BookingServiceContract $bookingRepositoryContract)
    {
        $this->bookingRepository = $bookingRepositoryContract;
    }
}
