@extends('layouts.default')
@section('title','Eleven')
@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">

        <div class="container">
          <div class="row">
            <div class="col-4">
              <div class="sidebar" style="width: 97%; float: left;">
                <div class="links-wrap foot" style="margin: 10% 10%;">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                      <div class="col-md-6">
                        <input id="name" type="text" placeholder="请输入您的用户名" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <input id="email" type="email" placeholder="请输入您的邮箱账号" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <input id="captcha" placeholder="图片验证码" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>
                        <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
                        @if ($errors->has('captcha'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('captcha') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <input id="password" type="password" placeholder="请输入密码" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <input id="password-confirm" type="password" placeholder="请再次输入密码" class="form-control" name="password_confirmation" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1" />
                        <label class="form-check-label" htmlFor="exampleCheck1">我已阅读并同意 <a href="#">《用户服务协议》</a> </label>
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-8">
              <div class="posts-container" style="width: 100%;">
                <div class="post-item">
                  <img src="images/283d6a0.png">
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