@extends('layouts.default')
@section('title','全部-ROCBOSS')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="user-show">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <div class="posts-container">

                                    <a class="ivu-menu-item" href="#">冒泡</a>
                                    <a class="ivu-menu-item" href="#">文章</a>


                                    <hr>
                                    @if (count($articles))

                                    @foreach ($articles as $article)

                                    <div class="post-item">

                                        <div class="post-item-userinfo">
                                            <a href="{{ route('users.show',Auth::id()) }}" class="">
                                                <div class="post-item-userinfo-avatar">
                                                    <img src="{{ $user->avatar }}" alt="" class="post-item-userinfo-avatar-img">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="post-item-content">
                                            <div class="post-item-content-header">
                                                <a href="{{ route('users.show',Auth::id()) }}" class="">
                                                    <span class="nickname">{{ $user->name }}</span>
                                                </a>
                                                <span class="time"> {{ $article->created_at }}</span>
                                            </div>
                                            <div class="post-item-content-text">
                                                <a href="#">
                                                    <p>
                                                        {{ $article->title }}
                                                    </p>
                                                </a>
                                            </div>

                                        </div>
                                        <span class="eeee666666">
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('您确定要删除本条微博吗？');">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{route('articles.edit',$article->id)}}" style="font-size: 14px;top: 11px;/* padding-top: 41px; */position: absolute;right: 44px;">编辑</a>
                                                <span>
                                                    <button type="submit" class="btn btn-link" style="color: red;font-size:13px;position: absolute;top: 5px;right: -5px;">删除</button>
                                                </span>
                                                <!-- <button type="submit" class="btn btn-sm btn-danger">删除</button> -->
                                            </form>
                                        </span>
                                        <div class="post-item-praise">
                                            <div class="praise-wrap">
                                                <div class="praise-bottom">
                                                    <a class="iconfont icon-taoxin" style="color: #657786;"></a><br>
                                                    <a href="#" class="number" style="color: #657786;">1</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @endforeach


                                    @else
                                    <div class="card-body-sky" style="float: none;">
                                        <img src="/images/2452e39.png" alt="">
                                        <div class="sky">暂无数据 ~_~</div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="sidebar">
                                    <div class="user-bg"></div>
                                    <div class="user-info">
                                        <div class="user-avatar">
                                            <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                                        </div>
                                        <div class="user-name">
                                            <span>{{ $user->name }}</span>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <p>{{ $user->introduction }}</p>
                                    </div>
                                </div>

                                <div class="sidebar">

                                    <div class="statistics">
                                        <div class="statistic" style="border-right: 1px solid #e7eaf3;">
                                            <div class="num-board">关注了</div>
                                            <div class="unm">0</div>
                                        </div>
                                        <div class="statistic">
                                            <div class="num-board">关注者</div>
                                            <div class="unm">0</div>
                                        </div>
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