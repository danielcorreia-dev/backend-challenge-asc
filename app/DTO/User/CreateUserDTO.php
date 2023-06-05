<?php

namespace App\DTO\User;

class CreateUserDTO
{
    public function __construct()
    {
    }

    public static function makeFromRequest($request)
    {
        return new self();
    }
}
