<div class="post-item">

    <div class="post-item-userinfo">
        <a href="{{ route('users.show', [$article->user_id]) }}" class="">
            <div class="post-item-userinfo-avatar">
                <img src="{{ $article->user->avatar }}" alt="" class="post-item-userinfo-avatar-img">
            </div>
        </a>
    </div>

    <div class="post-item-content">
        <div class="post-item-content-header">
            <a href="{{ route('users.show', [$article->user_id]) }}" class="">
                <span class="nickname">{{ $article->user->name }}</span>
            </a>
            <span class="time">{{ $article->created_at }}</span>
            <span class="iconfont icon-zhiding"></span>
            <span class="iconfont icon-tupian"></span>
        </div>
        <div class="post-item-content-text">
            <a href="{{route('show',[$article->id])}}">
                <p>{{ $article->title }}
            </a>
        </div>

    </div>
    <div class="post-item-praise">
        <div class="praise-wrap">
            <div class="praise-bottom">
                <a class="iconfont icon-taoxin" style="color: #657786;"></a><br>
                <a href="#" class="number" style="color: #657786;">1</a>
            </div>
        </div>
    </div>
</div>