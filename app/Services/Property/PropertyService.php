<?php

namespace App\Services\Property;


use App\Repositories\Property\PropertyRepositoryContract;
use App\Services\Property\PropertyServiceContract as PropertyPropertyServiceContract;

class PropertyService implements PropertyPropertyServiceContract
{
    protected $propertyRepository;

    public function __construct(PropertyRepositoryContract $propertyRepository)
    {
        $this->propertyRepository = $propertyRepository;
    }

    public function getPropertyById(int $id)
    {
        return $this->propertyRepository->getById($id);
    }

    public function getAllProperties()
    {
        return $this->propertyRepository->all()->toArray();
    }

    public function storeProperty(array $data)
    {
        return $this->propertyRepository->store($data);
    }

    public function updatePropertyById(array $data, int $id)
    {
        return $this->propertyRepository->updateById($data, $id);
    }

    public function deleteProperty(int $id)
    {
        return $this->propertyRepository->delete($id);
    }
}
