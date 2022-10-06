<?php

namespace App\Entity;

class DTOFactory
{
    public function createFromArray(string $className, array $data)
    {
        $dto = new $className();
        foreach ($data as $key => $value) {
            if (property_exists($className, $key)) {
                $dto->$key = $value;
            }
        }

        return $dto;
    }

}
