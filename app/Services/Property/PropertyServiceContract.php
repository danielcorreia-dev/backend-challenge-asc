<?php

namespace App\Services\Property;

interface PropertyServiceContract
{
    public function getPropertyById(int $id);
    public function getAllProperties();
    public function storeProperty(array $data);
    public function updatePropertyById(array $data, int $id);
    public function deleteProperty(int $id);
}
