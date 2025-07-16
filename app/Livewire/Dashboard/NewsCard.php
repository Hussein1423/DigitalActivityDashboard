<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Repositories\ApiRepository;

class NewsCard extends Component
{

    public function render()
    {
        return view('livewire.dashboard.news-card');
    }
}
