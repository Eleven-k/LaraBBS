@extends('layouts.default')
@section('title','全部-ROCBOSS')
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

                                @include('shared._errors')
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <select class="form-control" name="category_id" required>
                                        <option value="" hidden disabled selected>技术交流</option>
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
                                    <textarea name="content" class="form-control" id="editor" rows="6" placeholder="请填入至少三个字符的内容。" autofocus>{{ old('content') }}</textarea>
                                </div>

                                <div class="type-warpper">
                                    <!-- <div class="type-btn">
                                        <div class="text-btn"></div>
                                        <div>段落</div>
                                    </div>
                                    <div class="type-btn img-btn">
                                        <div class="ivu-upload">
                                            <div class="ivu-upload ivu-upload-select"><input type="file" class="ivu-upload-input">
                                                <div class="text-btn"></div>
                                                <div>图片</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="type-btn video-btn">
                                        <div data-v-2257a61a="" class="uploader">
                                            <div class="uploader-unsupport" style="display: none;">
                                            </div> <label class="uploader-btn text-btn">
                                                <input type="file" accept="video/mp4" style="visibility: hidden; position: absolute; width: 1px; height: 1px;">
                                            </label>
                                        </div>
                                        <div>视频</div>
                                    </div> -->
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