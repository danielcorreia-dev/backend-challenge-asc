<?php

namespace App\Http\Controllers;

use App\Services\Booking\BookingServiceContract;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    protected $bookingService;

    public function __construct(BookingServiceContract $bookingServiceContract)
    {
        $this->bookingService = $bookingServiceContract;
    }
}
