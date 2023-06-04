<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lessee()
    {
        return $this->belongsTo(User::class, 'lessee_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function rentalHistory()
    {
        return $this->hasOne(RentalHistory::class);
    }
}
