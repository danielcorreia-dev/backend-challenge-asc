<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Mockery\Expectation;

class CEPValidationService
{
    public static function validateCEP(string $cep): string
    {
        try {
            $response = Http::get("viacep.com.br/ws/$cep/json/");
            $data = $response->json();

            return isset($data['cep']);
        } catch (Expectation $e) {
            $response->throw($e->getExceptionMessage());
        }
    }
}
