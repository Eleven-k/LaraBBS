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
                                    <div class="posts-addons">
                                        <div class="posts-filter-wrap">
                                            <div class="filter-item"><a  href="{{ route('index') }}">最新发表</a></div>
                                            <div class="filter-item"><a href="{{ Request::url() }}">最后回复</a></div>
                                            <div class="filter-item"><a href="{{ route('attention.index') }}">我的关注</a></div>
                                        </div>
                                    </div>
                                    <div class="posts-create">
                                        <a class="btn btn-primary" href="{{ route('articles.create') }}" role="button"><span class="iconfont icon-qianbi"></span>发布</a>
                                    </div>

                                    @if (isset($feed_items))
                                        @foreach ($feed_items as $article)
                                        @include('article._article', ['article' => $article])
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
                                    <div class="main-list">
                                        <a href="{{ route('index') }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>全部主题</div>
                                        </a>
                                        <a href="{{ route('categories.show', 1) }}">

                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>技术交流</div>
                                        </a>
                                        <a href="{{ route('categories.show', 2) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>天下杂谈</div>
                                        </a>
                                        <a href="{{ route('categories.show', 3) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>心情分享</div>
                                        </a>
                                        <a href="{{ route('categories.show', 4) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>灌水专区</div>
                                        </a>
                                        <a href="{{ route('categories.show', 5) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>商业合作</div>
                                        </a>
                                        <a href="{{ route('categories.show', 6) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>开源项目</div>
                                        </a>
                                        <a href="{{ route('categories.show', 7) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>前端和视觉设计</div>
                                        </a>
                                        <a href="{{ route('categories.show', 8) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>个人创业</div>
                                        </a>
                                        <a href="{{ route('categories.show', 9) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>极客那些事</div>
                                        </a>
                                        <a href="{{ route('categories.show', 10) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>科技智趣生活</div>
                                        </a>
                                        <a href="{{ route('categories.show', 11) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>爱旅游爱摄影</div>
                                        </a>
                                        <a href="{{ route('categories.show', 12) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>汽车之家</div>
                                        </a>
                                        <a href="{{ route('categories.show', 13) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>极简生活</div>
                                        </a>
                                        <a href="{{ route('categories.show', 14) }}">
                                            <div class="group-item"><span class="iconfont icon-changyongicon-"></span>产品经理</div>
                                        </a>
                                    </div>
                                </div>

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
                                        <a href="#"><img src="images/logo.webp" alt="Vultr"></a>
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