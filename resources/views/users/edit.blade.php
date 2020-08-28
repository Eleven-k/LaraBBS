@extends('layouts.default')
@section('title','Eleven')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="user-edit">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <div class="sidebar" style="width: 84.5%; float: left;">
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
                                    </div>
                                </div>

                                <div class="sidebar" style="width: 84.5%; float: left;">
                                    <a href="{{route('users.edit',Auth::id())}}">
                                        <div class="menu-modify">基本信息</div>
                                    </a>
                                    <a href="{{route('password.edit',Auth::id())}}">
                                        <div class="menu-modify">修改密码</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-8">
                                <div class="posts-container" style="width:106.5%; float: right;">
                                    <div class="ivu-form-item">
                                        <div class="ivu-form-item-content">
                                            <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}

                                                @include('shared._errors')

                                                <div class="portrait">
                                                    @if($user->avatar)
                                                    <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
                                                    @endif
                                                    <input type="file" name="avatar" class="form-control-file">
                                                </div>

                                                <div class="ivu-information">
                                                    <label for="ivu-form-item-label">用户名</label>
                                                    <div class="ivu-input-type-text"> 
                                                        <div class="ivu-input-box">
                                                        <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" disabled ="disabled" style="background-color: #d8dde6;">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ivu-information">
                                                    <label for="ivu-form-item-label">个性签名</label>
                                                    <div class="ivu-input-type-text"> 
                                                        <div class="ivu-input-box">
                                                        <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ivu-information">
                                                    <div class="ivu-input-type-text"> 
                                                        <div class="ivu-input-box">
                                                        <button type="submit" class="btn btn-primary">保存</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
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