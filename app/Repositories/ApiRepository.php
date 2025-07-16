<?php
namespace App\Repositories;

use App\Services\NotionService;
use App\Services\YoutubeService;
use App\Services\GithubService;
use App\Services\NewsService;
use App\Services\UdemyService;

class ApiRepository
{
    protected YoutubeService $youtubeService;
    protected GithubService $githubService;
    public function __construct(YoutubeService $youtubeService, GithubService $githubService)
    {
         $this->youtubeService = $youtubeService;
        $this->githubService = $githubService;
    }

    public function getYoutubeVideos(): array
{
    $videos = $this->youtubeService->getLatestVideos();

    return collect($videos)->map(function ($video) {
        return [
            'id' => $video['id']['videoId'] ?? null,
            'title' => $video['snippet']['title'] ?? 'No title',
            'publishedAt' => $video['snippet']['publishedAt'] ?? '',
            'thumbnail' => $video['snippet']['thumbnails']['medium']['url'] ?? '',
            'url' => 'https://www.youtube.com/watch?v=' . ($video['id']['videoId'] ?? ''),
        ];
    })->toArray();
}

public function getGithubData(): array
{
    $profile = $this->githubService->getProfile();
    $repos = $this->githubService->getRepositories();

    return [
        'name' => $profile['name'] ?? config('services.github.username'),
        'followers' => $profile['followers'] ?? 0,
        'public_repos' => $profile['public_repos'] ?? 0,
        'repos' => collect($repos)->map(function ($repo) {
            return [
                'name' => $repo['name'],
                'url' => $repo['html_url'],
                'updated_at' => $repo['updated_at'],
            ];
        })->toArray(),
    ];
}





    protected function extractTitle(array $page): string
{
    if (isset($page['properties'])) {
        foreach ($page['properties'] as $property) {
            if (
                isset($property['type']) &&
                $property['type'] === 'title' &&
                !empty($property['title']) &&
                isset($property['title'][0]['text']['content'])
            ) {
                return $property['title'][0]['text']['content'];
            }
        }
    }

    return 'Untitled';
}

}
