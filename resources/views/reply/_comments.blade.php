@foreach($comments as $index=>$reply)
<div class="post-item">
    <div class="post-item-userinfo">
        <a href="{{ route('users.show', [$reply->user_id]) }}" class="">
            <div class="post-item-userinfo-avatar">
                <img src="{{ $reply->user->avatar }}" alt="" class="post-item-userinfo-avatar-img">
            </div>
        </a>
    </div>

    <div class="post-item-content">
        <div class="post-item-content-header">
            <a href="{{ route('users.show', [$reply->user_id]) }}" class="">
                <span class="nickname">{{ $reply->user->name }}</span>
            </a>

        </div>
        <div class="post-item-content-text">

            {!! $reply->content !!}

        </div>

    </div>

    <div class="post-item-praise">
        <span class="time">{{ $reply->created_at->diffForHumans() }}</span>
    </div>

    <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8" class="comments-reply">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <input type="hidden" name="replies_id" value="{{ $reply->id }}">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <textarea name="content" id="introduction-field" class="form-control" rows="1" placeholder="评论"></textarea>
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share mr-1"></i> 回复</button>
            </div>
        </div>
    </form>
   
    @foreach($replies as $replie)
    @if($reply->id == $replie->replies_id)

    <div class="reply-container">
        <div class="reply-item">
            <span class="reply-user"> <a href="{{ route('users.show', [$reply->user_id]) }}">{{ $replie->user->name }}:</a></span>
            <span class="reply-content"> {!! $replie->content !!}</span>
            <div class="reply-operations">{{ $replie->created_at->diffForHumans() }}
        <form action="{{ route('replies.destroy', $reply->id) }}" method="post" onsubmit="return confirm('确定要删除此评论？');">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-default btn-xs pull-left text-secondary">
               删除
            </button>
        </form>
            </div>
        </div>
    </div>

    @endif
    @endforeach

</div>
@endforeach