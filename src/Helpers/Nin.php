<?php

namespace HopekellDev\Confirmident\Helpers;

use Illuminate\Support\Facades\Http;

class Nin
{
    protected string $apiKey;
    protected string $baseUrl;

    /**
     * Construct
     */
    public function __construct(string $apiKey, string $baseUrl)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl;
    }

    /**
     * Search by NIN
     *
     * @param string $nin
     * @return array|null
     */
    public function searchByNIN(string $nin): ?array
    {
        $response = Http::withHeaders([
            'api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("$this->baseUrl/nin_search", [
            'nin' => $nin,
        ]);

        return $response->json();
    }

     /**
     * Search by Phone Number
     *
     * @param string $phone
     * @return array|null
     */
    public function searchByPhoneNumber(string $phone): ?array
    {
        $response = Http::withHeaders([
            'api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("$this->baseUrl/nin_phone", [
            'phone' => $phone,
        ]);

        return $response->json();
    }

    /**
     * Search NIN by Demographic Information
     *
     * @param array $payload ['firstname' => '', 'lastname' => '', 'dob' => '', 'gender' => '']
     * @return array|null
     */
    public function searchByDemographicInfo(array $payload): ?array
    {
        $response = Http::withHeaders([
            'api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("$this->baseUrl/nin_demo", $payload);

        return $response->json();
    }

}

