<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title','全部-ROCBOSS')</title>
    <meta charset="UTF-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="/css/iconfont.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> 
    <link rel="stylesheet" href="{{ mix('css/before.css') }}">
</head>

<body style="background-color: #f5f7f9;">

    <div class="wrapper">
    @include('layouts._header')
    @include('shared._messages')
    @yield('content')

        <div class="layout-footer">
            <div class="footer-wrap">
                <div class="footer-container">
                    Powered By <a href="https://rocboss.com" target="_blank">ROCBOSS v3.0.0 Alpha</a>
                    © 2014-2020.
                    <a href="#" target="_blank">浙ICP备15008828号-2</a>
                </div>
            </div>
        </div>

    </div>


    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>