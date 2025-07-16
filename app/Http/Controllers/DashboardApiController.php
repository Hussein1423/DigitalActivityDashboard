<?php

// app/Http/Controllers/DashboardApiController.php

namespace App\Http\Controllers;

use App\Repositories\ApiRepository;

class DashboardApiController extends Controller
{
    protected ApiRepository $repo;

    public function __construct(ApiRepository $repo)
    {
        $this->repo = $repo;
    }

    public function all()
    {
        return response()->json([
            'youtube'  => $this->repo->getYoutubeVideos(),
            'github'   => $this->repo->getGithubData(),
        ]);
    }
}
