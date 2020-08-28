@foreach($reply as $replie)
    <div class="post-item-content">
        <div class="post-item-content-header">
            <a href="{{ route('users.show', [$reply->user_id]) }}" class="">
                <span class="nickname">{{ $replie->user->name }}</span>
            </a>
        </div>
        <div class="post-item-content-text">

        {!! $replie->content !!}

        </div>

    </div>

    <div class="post-item-praise">
        <span class="time">{{ $replie->created_at->diffForHumans() }}</span>
    </div>
    @endforeach