<?php

declare(strict_types=1);

namespace SharpAPI\TravelToursActivities;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Categorize tours and activities using AI - generates category matches with scores
 *
 * @package SharpAPI\TravelToursActivities
 * @api
 */
class ToursActivitiesCategorizationClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPTravelToursActivities/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * Categorize tours and activities using AI - generates category matches with scores
     *
     * @param string $productName The product/service name to categorize
     * @param string|null $city Optional city name
     * @param string|null $country Optional country name
     * @param string $language Output language (default: English)
     * @param int|null $maxQuantity Optional maximum quantity of categories
     * @param string|null $voiceTone Optional tone of voice
     * @param string|null $context Optional additional context
     * @return string Status URL for polling the job result
     * @throws GuzzleException
     * @api
     */
    public function categorizeToursActivities(
        string $productName,
        ?string $city = null,
        ?string $country = null,
        string $language = 'English',
        ?int $maxQuantity = null,
        ?string $voiceTone = null,
        ?string $context = null
    ): string {
        $response = $this->makeRequest('POST', '/tth/ta_product_categories', array_filter([
            'content' => $productName,
            'city' => $city,
            'country' => $country,
            'language' => $language,
            'max_quantity' => $maxQuantity,
            'voice_tone' => $voiceTone,
            'context' => $context,
        ], fn($v) => $v !== null));

        return $this->parseStatusUrl($response);
    }
}
