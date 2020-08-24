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

                                <div class="follow-title">


                                        <a class="follow-title-s" href="#">{{ $title }}</a>
                                            

                                    </div>
                                    <div class="offset-md-2 col-md-8">
                                        <div class="post-item">



                                            <div class="article-item">
                                                @foreach ($users as $user)
                                                <a href="{{ route('users.show', $user) }}">
                                                <div class="follow-pages">
                                                    <img class="mr-3" src="{{ $user->avatar }}" alt="{{ $user->name }}">
                                                    <a href="{{ route('users.show', $user) }}">
                                                        {{ $user->name }}
                                                    </a>
                                                </div>
                                                </a>

                                                @endforeach

                                            </div>
                                            <div class="mt-3">
                                                {!! $users->render() !!}
                                            </div>

                                        </div>
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