@extends('layouts.default')
@section('title','Eleven')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="article-create">
                    <div class="compose-wrap">
                        <div class="type">
                            <div class="ivu-radio-group-button">
                                <a href="#">
                                    <div class="vu-radio-default">冒泡</div>
                                </a>
                                <a href="#">
                                    <div class="vu-radio-default" style="background-color: #2d8cf0; color:#ffffff">文章</div>
                                </a>
                            </div>
                        </div>

                        <div class="article">
                            <form action="{{ route('articles.store') }}" method="POST" accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                @include('shared._errors')
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <select class="form-control" name="category_id" required>
                                        <option value="" hidden disabled selected>请选择分类</option>
                                        @foreach ($categories as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="well well-sm">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="请填写标题" required />
                                </div>

                                <div class="form-group">
                                    <textarea name="content" class="form-control" id="editor" rows="12" placeholder="请填入至少三个字符的内容。" autofocus>{{ old('content') }}</textarea>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}" />
@stop

@section('scripts')
<script type="text/javascript" src=" {{ asset('js/jquery.min.js') }} "></script>
<script type="text/javascript" src=" {{ asset('js/module.js') }} "></script>
<script type="text/javascript" src=" {{ asset('js/hotkeys.js') }} "></script>
<script type="text/javascript" src=" {{ asset('js/uploader.js') }} "></script>
<script type="text/javascript" src=" {{ asset('js/simditor.js') }} "></script>
<script>
    toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough',
        'color', 'fontScale', 'ol', 'ul', 'blockquote', 'code', 'table',
        'link', 'image', 'hr', 'indent', 'outdent', 'alignment'
    ];
    var editor = new Simditor({
        textarea: $('#editor'),
        toolbar: toolbar, //工具栏
        pasteImage: true,
        upload: {
            url: '{{ route('articles.upload_image') }}',
            params: {
                _token: '{{ csrf_token() }}'
            },
            fileKey: 'upload_file',
            connectionCount: 10,
            leaveConfirm: '文件上传中，关闭此页面将取消上传。'
        },
    });
</script>
@stop