<div class="nav">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="container">
                    <div class="row">
                        <div class="col"><a href="{{ route('index') }}" class="nav-title">ROCBOSS</a></div>
                        <div class="col">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="请输入关键词回车搜索" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="col">
                            <div class="nav-right">
                                @guest
                                <a class="btn btn-primary create" href="register" role="button">注册</a>
                                <a class="btn btn-primary login" href="login" role="button">登录</a>
                                @else



                


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px" style="border-radius: 50%;">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @can('manage_contents')
                                        <a class="dropdown-item" href="{{ url(config('administrator.uri')) }}">后台管理</a>
                                        @endcan
                                        <a class="dropdown-item" href="{{route('users.show',Auth::id())}}">我的主页</a>
                                        <a class="dropdown-item" href="{{route('users.edit',Auth::id())}}">设置中心</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" id="logout" href="#">
                                            <form action="{{ route('logout') }}" method="POST">
                                                {{ csrf_field() }}
                                                <button class="btn btn-block btn-danger" type="" name="button">退出</button>
                                            </form>
                                        </a>
                                    </div>
                                </li>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>