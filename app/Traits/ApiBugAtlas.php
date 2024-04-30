<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;
trait ApiBugAtlas
{
    
    private $baseURL = 'https://api.bugatlas.com/v1';

    public function processApiResponse($endPoint, $body)
    {
        $response = Http::withHeaders($this->getApiHeaders())->post($this->baseURL.$endPoint, $body);
        dd($response->body());
        return $response;
    }

    private function getApiHeaders()
    {
        return [
            'api_key' => env('BUGATLAS_API_KEY'),
            'secret_key' => env('BUGATLAS_SECRET_KEY'),
            'Content-Type' => 'application/json'
        ];
    }
}