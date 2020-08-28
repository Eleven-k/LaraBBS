<div class="post-item-comments">
    <div class="item-comments">

        <div class="post-item-userinfo-comments">
            <img src="/images/comments.png" alt="" class="post-item-userinfo-avatar-img">
        </div>

    </div>

    <form action="{{ route('comments.store') }}" method="POST" accept-charset="UTF-8">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        {{ csrf_field() }}
        <div class="ivu-information">
            <div class="ivu-input-box">
                <textarea name="content" id="introduction-field" class="form-control" rows="5" placeholder="快来发表评论吧"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share mr-1"></i> 回复</button>
    </form>

</div>