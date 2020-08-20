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

                                    <div class="card-body-sky" style="float: none;">
                                    <img src="/images/2452e39.png" alt="">
                                    <div class="sky">暂无数据 ~_~</div>
                                    </div>
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