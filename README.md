# Laravel Confirmident

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hopekelldev/confirmident.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/confirmident)
[![Total Downloads](https://img.shields.io/packagist/dt/hopekelldev/confirmident.svg?style=flat-square)](https://packagist.org/packages/hopekelldev/confirmident)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/HopekellDev/laravel-confirmident/main.svg?style=flat-square)](https://scrutinizer-ci.com/g/HopekellDev/Laravel-Confirmident/?branch=main)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.1-777BB4.svg?style=flat-square)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/Laravel-%3E%3D10.0-FF2D20.svg?style=flat-square)](https://laravel.com/)
[![GuzzleHTTP Version](https://img.shields.io/badge/GuzzleHTTP-%3E%3D7.0-3F7E95.svg?style=flat-square)](https://github.com/guzzle/guzzle)

**Laravel Confirmident** is a Laravel 10+ package for seamless integration with the [Confirmident](https://confirmident.com.ng) identity verification API.  
It provides a simple Facade-based interface for NIN and identity verification.

## ✅ Requirements

- **PHP** >= 8.1
- **Laravel** >= 10.0
- **GuzzleHTTP** >= 7.0

## 📦 Installation

```bash
composer require hopekelldev/confirmident
```

## ⚙️ Configuration

### Publish Configuration File

```bash
php artisan vendor:publish --tag=config --provider="HopekellDev\Confirmident\ConfirmidentServiceProvider"
```

### Environment Variables (.env)

Add the following to your `.env` file:

```dotenv
# Confirmident API Key from your Confirmident account
CONFIRMIDENT_API_KEY=your_api_key_here

# Base URL for Confirmident API (default is production endpoint)
CONFIRMIDENT_API_BASE_URL=https://api.confirmident.com.ng
```

## 🚀 Usage Example

### Verify NIN Example

```php
use Confirmident;

// Verify a NIN number
$response = Confirmident::verifyNIN('12345678901');

if ($response && $response['status'] === 'success') {
    $data = $response['data'];
    // Process the verified data
} else {
    // Handle failure or error
    $errorMessage = $response['message'] ?? 'Verification failed';
}
```

## 📋 Available Methods

| Method                               | Description                                           |
|--------------------------------------|-------------------------------------------------------|
| `nin()->searchByNIN($nin)`           | Search NIN details by NIN number                     |
| `nin()->searchByPhoneNumber($phone)` | Search NIN details by registered phone number        |
| `nin()->searchByDemographicInfo($data)` | Search NIN by demographic information (firstname, lastname, dob, gender) |
| `bvn()->verification($bvn)`          | Verify BVN and retrieve identity details             |

## 📖 Controller Examples

For detailed usage examples and expected API responses, see:  
👉 [tests/ControllerExample.md](tests/ControllerExample.md)


## 📃 License

Released under the MIT License.  
See the [LICENSE](LICENSE) file for details.

## 👤 Author

**Ezenwa Hopekell**  
- GitHub: [HopekellDev](https://github.com/HopekellDev)  
- Email: hopekelltech@gmail.com

## 🤝 Contributions & Issues

Feel free to open issues or submit pull requests on [GitHub](https://github.com/HopekellDev/confirmident).