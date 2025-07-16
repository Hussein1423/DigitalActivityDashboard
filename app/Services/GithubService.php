<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubService
{
    protected string $username;

    public function __construct()
    {
        $this->username = config('services.github.username');
    }

    public function getProfile()
    {
        $response = Http::get("https://api.github.com/users/{$this->username}");
        return $response->successful() ? $response->json() : null;
    }

    public function getRepositories($limit = 5)
    {
        $response = Http::get("https://api.github.com/users/{$this->username}/repos", [
            'sort' => 'updated',
            'per_page' => $limit,
        ]);

        return $response->successful() ? $response->json() : [];
    }
}
