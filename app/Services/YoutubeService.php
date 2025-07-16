<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class YoutubeService
{
    protected string $apiKey;
    protected string $channelId;
    protected string $baseUrl = 'https://www.googleapis.com/youtube/v3/';

    public function __construct()
    {
        $this->apiKey = config('services.youtube.api_key');
        $this->channelId = config('services.youtube.channel_id');
    }

    public function getLatestVideos(int $maxResults = 5): array
    {
        $response = Http::get($this->baseUrl . 'search', [
            'key' => $this->apiKey,
            'channelId' => $this->channelId,
            'part' => 'snippet',
            'order' => 'date',
            'maxResults' => $maxResults,
        ]);

        if ($response->failed()) {
            return [];
        }

        return $response->json()['items'] ?? [];
    }
}
