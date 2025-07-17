<?php

namespace HopekellDev\Confirmident\Helpers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

/**
 * Confirmident's Identity Verification laravel package
 * @author Hope Ezenwa- Hopekell <hopekelltech@gmail.com>
 * @version 1
 **/
class Bvn
{

    protected $apiKey;
    protected $baseUrl;

    /**
     * Construct
     */
    function __construct(String $apiKey, String $baseUrl)
    {

        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl;
    }

        /**
     * BVN Verification
     *
     * @param string $bvn
     * @return array|null
     */
    public function verification(string $bvn): ?array
    {
        $response = Http::withHeaders([
            'api-key' => $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post("$this->baseUrl/bvn_search", [
            'bvn' => $bvn,
        ]);

        return $response->json();
    }

}