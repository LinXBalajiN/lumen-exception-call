<?php

namespace App\Traits;

use GuzzleHttp\Client;
use RequestException;

trait ApiBugAtlas
{
    
    private $baseURL = 'https://api.bugatlas.com/v1';


    public function processApiResponse($endPoint, $body)
    {
        $client = new Client([
            'headers' => $this->getApiHeaders(),
        ]);

        // try {
            // Make the POST request
            $response = $client->post($this->baseURL . $endPoint, [
                $body,
            ]);
            dd($response);
            // Get the response body
            $responseData = json_decode($response->getBody()->getContents(), true);
            dd($responseData->body());
            // Return the response data
            return $responseData;
        // } catch (RequestException $e) {
        //     // Handle request exceptions
        //     // Log the error or return a custom error response
        //     return [
        //         'error' => 'Request failed',
        //         'message' => $e->getMessage(),
        //     ];
        // } catch (\Exception $e) {
        //     // Handle other exceptions
        //     return [
        //         'error' => 'An error occurred',
        //         'message' => $e->getMessage(),
        //     ];
        // }
       
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