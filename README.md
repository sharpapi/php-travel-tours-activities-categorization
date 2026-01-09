![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Travel Tours Activities Categorization API for PHP

## ✈️ Categorize tours and activities using AI - generates category matches with scores

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-travel-tours-activities-categorization.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-travel-tours-activities-categorization)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-travel-tours-activities-categorization.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-travel-tours-activities-categorization)

Check the full documentation on the [Travel Tours Activities Categorization API for PHP API](https://sharpapi.com/en/catalog/ai/travel-tourism-hospitality/tours-activities-product-categorization) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsVh) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/travel-tourism-hospitality/tours-activities-product-categorization) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-travel-tours-activities-categorization
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## Laravel Integration

Building a Laravel application? Check the Laravel package version for better integration.

---

## What it does

Categorize tours and activities using AI - generates category matches with scores

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\TravelToursActivities\ToursActivitiesCategorizationClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new ToursActivitiesCategorizationClient(apiKey: $apiKey);

try {
    $statusUrl = $client->categorizeToursActivities(
        productName: 'Luxury Beach Resort',
        city: 'Miami',
        country: 'United States',
        language: 'English'
    );

    // Optional: Configure polling
    $client->setApiJobStatusPollingInterval(10);
    $client->setApiJobStatusPollingWait(180);

    // Fetch results (polls automatically)
    $result = $client->fetchResults($statusUrl);
    $resultData = $result->getResultJson();

    echo $resultData;
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json

{
    "data": {
        "type": "api_job_result",
        "id": "55bc3311-d16e-4949-83a0-d367b7f79f89",
        "attributes": {
            "status": "success",
            "type": "tth_ta_product_categories",
            "result": [
                {
                    "name": "Boat Tours",
                    "weight": 9.5
                },
                {
                    "name": "Nature & Wildlife Tours",
                    "weight": 8.7
                },
                {
                    "name": "Water Sports",
                    "weight": 7.8
                },
                {
                    "name": "Sightseeing Cruises",
                    "weight": 9.2
                },
                {
                    "name": "Day Trips",
                    "weight": 8
                },
                {
                    "name": "Eco Tours",
                    "weight": 7.5
                },
                {
                    "name": "Adventure Tours",
                    "weight": 6.8
                },
                {
                    "name": "Cultural Tours",
                    "weight": 6
                },
                {
                    "name": "Multi-day Tours",
                    "weight": 5.5
                },
                {
                    "name": "Private Sightseeing Tours",
                    "weight": 5.2
                }
            ]
        }
    }
}

```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
