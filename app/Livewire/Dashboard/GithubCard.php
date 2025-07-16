<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Repositories\ApiRepository;

class GithubCard extends Component
{
    public array $github = [];

public function mount(ApiRepository $repo)
{
    $this->github = $repo->getGithubData();
}

    public function render()
    {
        return view('livewire.dashboard.github-card');
    }
}
