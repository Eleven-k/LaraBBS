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
                                    @if (count($articles)>0)

                                    @foreach ($articles as $article)

                                    <div class="post-item">

                                        <div class="post-item-userinfo">
                                            <a href="{{ route('users.show',$article->id) }}" class="">
                                                <div class="post-item-userinfo-avatar">
                                                    <img src="{{ $user->avatar }}" alt="" class="post-item-userinfo-avatar-img">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="post-item-content">
                                            <div class="post-item-content-header">
                                                <a href="{{ route('users.show',$article->id) }}" class="">
                                                    <span class="nickname">{{ $user->name }}</span>
                                                </a>
                                                <span class="time"> {{ $article->created_at }}</span>
                                            </div>
                                            <div class="post-item-content-text">
                                                <a href="{{route('show',$article->id)}}">
                                                    <p>
                                                        {{ $article->title }}
                                                    </p>
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

                                    <div class="statistics"><a href="{{ route('users.followings', $user->id) }}">
                                            <div class="statistic" style="border-right: 1px solid #e7eaf3;">
                                                <div class="num-board">关注了</div>
                                                <div class="unm"> {{ count($user->followings) }}</div>
                                            </div>
                                        </a>
                                        <a href="{{ route('users.followers', $user->id) }}">
                                            <div class="statistic">
                                                <div class="num-board">关注者</div>
                                                <div class="unm">{{ count($user->followers) }}</div>
                                            </div>
                                        </a>

                                    </div>

                                </div>

                                <div class="sidebar">

                                    <div class="statistics">
                                        @can('follow', $user)
                                        <div class="text-center mt-2 mb-4">
                                            @if (Auth::user()->isFollowing($user->id))
                                            <form action="{{ route('followers.destroy', $user->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-outline-primary">取消关注</button>
                                            </form>
                                            @else
                                            <form action="{{ route('followers.store', $user->id) }}" method="post">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-sm btn-primary">关注</button>
                                            </form>
                                            @endif
                                        </div>
                                        @endcan

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