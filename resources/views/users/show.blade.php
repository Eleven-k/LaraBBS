@extends('layouts.default')
@section('title','全部-ROCBOSS')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="posts-container">

                    <div class="card-body" style="float: none;">
                        <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                    </div>
                    
                    <hr>

                    <div class="card-body" style="float: none;">
                        暂无数据 ~_~
                    </div>

                </div>

                <div class="sidebar">
                    <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                    <div class="card-body">
                        <h5><strong>个人简介</strong></h5>
                        <p>{{ $user->introduction }}</p>
                        <hr />
                        <h5><strong>注册于</strong></h5>
                        <p>{{ $user->created_at }}</p>
                    </div>
                </div>

            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
@stop