<?php

namespace HopekellDev\Confirmident;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use HopekellDev\Confirmident\Helpers\Nin;
use HopekellDev\Confirmident\Helpers\Bvn;

class Confirmident
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('confirmident.api_key');
        $this->baseUrl = config('confirmident.base_url', 'https://confirmident.com.ng/api');
    }

    /**
     * Banks
     * @return NIN
     */
    public function nin()
    {
        $nin = new Nin($this->apiKey, $this->baseUrl);
        return $nin;
    }

    /**
     * Banks
     * @return BVN
     */
    public function bvn()
    {
        $bvn = new Bvn($this->apiKey, $this->baseUrl);
        return $bvn;
    }
}
