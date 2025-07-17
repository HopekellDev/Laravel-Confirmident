<?php


/**
 * Confirmident's Identity Verification laravel package
 * @author Hope Ezenwa- Hopekell <hopekelltech@gmail.com>
 * @version 1
 **/

return [
    'api_key' => env('CONFIRMIDENT_API_KEY', ''),
    'base_url' => env('CONFIRMIDENT_API_BASE_URL', 'https://confirmident.com.ng/api'),
];