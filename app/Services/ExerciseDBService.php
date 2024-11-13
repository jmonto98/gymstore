<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ExerciseDBService
{
    private $apiKey;

    private $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.exercisedb.key');
        $this->baseUrl = config('services.exercisedb.url');

        Log::debug('ExerciseDBService configuration:', [
            'baseUrl' => $this->baseUrl,
            'hasApiKey' => ! empty($this->apiKey),
        ]);
    }

    public function findExercisesByEquipment($equipment)
    {
        try {
            if (empty($this->baseUrl) || empty($this->apiKey)) {
                Log::error('ExerciseDB configuration missing:', [
                    'hasUrl' => ! empty($this->baseUrl),
                    'hasKey' => ! empty($this->apiKey),
                ]);

                return [];
            }

            $searchTerm = strtolower(trim($equipment));
            Log::info('Search term:', ['term' => $searchTerm]);

            $cacheKey = 'exercises_'.md5($searchTerm);
            if (Cache::has($cacheKey)) {
                Log::info('Cache hit for search term:', ['term' => $searchTerm]);

                return Cache::get($cacheKey);
            }

            $url = rtrim($this->baseUrl, '/').'/exercises/name/'.urlencode($searchTerm);
            Log::info('Making API request to:', ['url' => $url]);

            $response = Http::withHeaders([
                'X-RapidAPI-Key' => $this->apiKey,
                'X-RapidAPI-Host' => parse_url($this->baseUrl, PHP_URL_HOST),
            ])->get($url);

            if (! $response->successful()) {
                Log::error('API request failed:', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return [];
            }
            $exercises = $response->json();

            if (! is_array($exercises)) {
                Log::error('Invalid response format:', [
                    'response' => $exercises,
                ]);

                return [];
            }

            Log::info('Exercises found:', [
                'count' => count($exercises),
                'first_few' => array_slice($exercises, 0, 3),
            ]);

            Cache::put($cacheKey, array_slice($exercises, 0, 9), now()->addMinutes(30));

            return array_slice($exercises, 0, 9);

        } catch (\Exception $e) {
            Log::error('Error in findExercisesByEquipment:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return [];
        }
    }
}
