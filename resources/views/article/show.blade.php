@extends('layouts.default')
@section('title','全部-ROCBOSS')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="article-index">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <div class="posts-container">


                                    <div class="article-show">
                                        <div class="post-item">
                                            <div class="post-item-userinfo">
                                                <a href="/post/HZ018V5E" class="">
                                                    <div class="post-item-userinfo-avatar">
                                                        <img src="{{ $article->user->avatar }}" alt="" class="post-item-userinfo-avatar-img">
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="post-item-content">
                                                <div class="post-item-content-header">
                                                    <a href="#" class="">
                                                        <span class="nickname">{{ $article->user->name }}</span>
                                                    </a>

                                                </div>
                                                <div class="post-item-content-text">
                                                    <h2>{!! $article->title !!}</h2>
                                                    <p>{!! $article->content !!}

                                                </div>
                                            </div>

                                            <div class="post-item-praise">
                                                <span class="time">{{ $article->created_at }}</span>
                                            </div>


                                            <div class="show-editor">
                                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('您确定要删除本条微博吗？');">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{route('articles.edit',$article->id)}}" style="font-size: 14px;top: 11px;/* padding-top: 41px; */position: absolute;right: 44px; width:30px">编辑</a>
                                                    <span>
                                                        <button type="submit" class="btn btn-link" style="color: red;font-size:13px;position: absolute;top: 5px;right: -5px; width:54px">删除</button>
                                                    </span>
                                                </form>
                                            </div>

                                        </div>

                                        <div class="post-item-comments">
                                            <div class="item-comments">

                                                <div class="post-item-userinfo-comments">
                                                    <img src="/images/comments.png" alt="" class="post-item-userinfo-avatar-img">
                                                </div>


                                            </div>

                                            <form action="{{ route('replies.store') }}" method="POST" accept-charset="UTF-8">
                                                {{ csrf_field() }}
                                                <div class="ivu-information">
                                                    <div class="ivu-input-box">
                                                        <textarea name="content" id="introduction-field" class="form-control" rows="5" placeholder="快来发表评论吧"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share mr-1"></i> 回复</button>
                                            </form>

                                        </div>
                                        @include('article._reply')

                                    </div>

                                </div>
                            </div>

                            <div class="col-4">
                                <div class="sidebar">
                                    <div class="links-wrap">
                                        <p>2019©ROCBOSSRoc's MeROCBOSSBatioVultr云主机阿里云主机免费云主机宝塔面板Dmit-HK高性能主机</p>
                                    </div>
                                </div>

                                <div class="sidebar">
                                    <div class="links-wrap foot">
                                        <a href="#">🔥ROCBOSS 3.0.0 Alpha开源版下载&安装</a>
                                    </div>
                                </div>

                                <div class="sidebar">
                                    <div class="links-wrap foot">
                                        <a href="#"><img src="/images/logo.webp" alt="Vultr"></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
@stop