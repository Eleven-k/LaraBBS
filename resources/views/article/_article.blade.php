<div class="post-item">

    <div class="post-item-userinfo">
        <a href="/post/HZ018V5E" class="">
            <div class="post-item-userinfo-avatar">
                <img src="{{ Auth::user()->avatar }}" alt="" class="post-item-userinfo-avatar-img">
            </div>
        </a>
    </div>

    <div class="post-item-content">
        <div class="post-item-content-header">
            <a href="#" class="">
                <span class="nickname">ROC</span>
            </a>
            <span class="time">{{ $article->created_at }}</span>
            <span class="iconfont icon-zhiding"></span>
            <span class="iconfont icon-tupian"></span>
        </div>
        <div class="post-item-content-text">
            <a href="#">
                <p>{!! $article->content !!}
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