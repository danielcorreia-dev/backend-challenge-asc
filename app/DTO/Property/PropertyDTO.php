<?php

namespace App\DTO\Property;

class PropertyDTO
{
    public function __construct(
        public int $lessorId,
        public string $cep,
        public string $propertyName,
        public string $description,
        public string $features,
        public float $dailyRate,
        public int $maxGuests,
        public int $minRentalDays,
        public string $status,
    ) {
    }
}
