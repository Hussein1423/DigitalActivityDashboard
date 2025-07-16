<div class="card shadow-sm p-3 mb-4">
    <h5>🐙 GitHub – {{ $github['name'] ?? 'Unknown' }}</h5>

    <p>
        🧑‍💻 Repos: <strong>{{ $github['public_repos'] }}</strong> |
        👥 Followers: <strong>{{ $github['followers'] }}</strong>
    </p>

    <ul class="list-unstyled">
        @foreach($github['repos'] as $repo)
            <li class="mb-2">
                <a href="{{ $repo['url'] }}" target="_blank" class="fw-bold text-decoration-none">
                    {{ $repo['name'] }}
                </a>
                <br>
                <small class="text-muted">
                    آخر تحديث: {{ \Carbon\Carbon::parse($repo['updated_at'])->diffForHumans() }}
                </small>
            </li>
        @endforeach
    </ul>
</div>
