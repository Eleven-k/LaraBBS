@extends('layouts.default')
@section('title','Eleven')
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
                                                    {!! $article->content !!}

                                                </div>
                                            </div>

                                            <div class="post-item-praise">
                                                <span class="time">{{ $article->created_at }}</span>
                                            </div>

                                           
                                            <div class="show-editor">
                                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('您确定要删除此文章吗？');">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{route('articles.edit',$article->id)}}" style="font-size: 14px;top: 11px;/* padding-top: 41px; */position: absolute;right: 44px; width:30px">编辑</a>
                                                    <span>
                                                        <button type="submit" class="btn btn-link" style="color: red;font-size:13px;position: absolute;top: 5px;right: -5px; width:54px">删除</button>
                                                    </span>
                                                </form>
                                            </div>
                                          


                                        </div>

                                        @includeWhen(Auth::check(), 'reply._comments_box', ['article' => $article])
                                        @include('reply._comments', ['comments'=>$comments,'replies'=>$replies])

                                    </div>

                                </div>
                            </div>

                            <div class="col-4">
                                <div class="sidebar">
                                    <div class="links-wrap">
                                        <p>2019©ELEVENRoc's MeELEVENBatioVultr云主机阿里云主机免费云主机宝塔面板Dmit-HK高性能主机</p>
                                    </div>
                                </div>

                                <div class="sidebar">
                                    <div class="links-wrap foot">
                                        <a href="#">🔥ELEVEN 3.0.0 Alpha开源版下载&安装</a>
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