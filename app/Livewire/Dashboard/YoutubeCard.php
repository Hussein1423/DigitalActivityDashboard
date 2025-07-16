<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Repositories\ApiRepository;

class YoutubeCard extends Component
{
public array $videos = [];

public function mount(ApiRepository $repo)
{
    $this->videos = $repo->getYoutubeVideos();
}

    public function render()
    {
        return view('livewire.dashboard.youtube-card');
    }
}
