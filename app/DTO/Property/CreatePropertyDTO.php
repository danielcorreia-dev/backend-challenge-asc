<?php

namespace App\DTO\Property;

class CreatePropertyDTO extends PropertyDTO
{
    public static function makeFromRequest($request)
    {
        return new self(
            $request->lessor_id,
            $request->property_name,
            $request->cep,
            $request->description,
            $request->features,
            $request->daily_rate,
            $request->max_guests,
            $request->min_rental_days,
            $request->status,
        );
    }
}
