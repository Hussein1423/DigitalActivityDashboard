<div class="card shadow-sm p-3 mb-4">
    <h5>▶️ أحدث فيديوهات اليوتيوب</h5>

    @if(count($videos) > 0)
        <ul class="list-unstyled">
            @foreach ($videos as $video)
                <li class="mb-3 d-flex align-items-center">
                    <img src="{{ $video['thumbnail'] }}" alt="Thumbnail" style="width:120px; height:auto; margin-right:10px;">
                    <div>
                        <a href="{{ $video['url'] }}" target="_blank" class="fw-bold text-decoration-none">
                            {{ $video['title'] }}
                        </a>
                        <br>
                        <small class="text-muted">
                            نُشر {{ \Carbon\Carbon::parse($video['publishedAt'])->diffForHumans() }}
                        </small>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">لا توجد فيديوهات حالياً.</p>
    @endif
</div>
