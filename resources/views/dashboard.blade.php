@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">📊 Digital Activity Dashboard</h2>

    <div class="row">
        <div class="col-md-6">@livewire('dashboard.github-card')</div>
        <div class="col-md-6">@livewire('dashboard.youtube-card')</div>

    </div>
    <div class="row mt-3">
        <div class="col-md-6">@livewire('dashboard.news-card')</div>
    </div>
</div>
@endsection
