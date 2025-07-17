<?php

namespace HopekellDev\Confirmident;

class Confirmident
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('confirmident.api_key');
        $this->baseUrl = config('confirmident.base_url', 'https://api.confirmident.com.ng');
    }

    public function verifyNIN($nin)
    {
        return $this->makeRequest('/verify-nin', ['nin' => $nin]);
    }

    protected function makeRequest($endpoint, $data = [])
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer '.$this->apiKey
        ])->post($this->baseUrl . $endpoint, $data)->json();
    }
}
