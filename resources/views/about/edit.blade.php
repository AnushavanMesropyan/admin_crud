@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit about</div>
                <div class="panel-body">
                    {{ Form::open(['route' => ['about.update', $about->id], 'method' => 'PUT', 'class'=>'form-horizontal', 'files'=>true]) }}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-8">
                                <!-- Tittle-->
                                <div class="form-group">
                                    <label for="title" class="col-sm-4 control-label required">Title</label>

                                    <div class="col-sm-6">
                                        <input id="title" type="text" class="form-control"
                                               name="title" value="{{$about->title }}" required autofocus>
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <!--end  Tittle-->
                                <!-- Description-->
                                <div class="form-group">
                                    <label for="description" class="col-sm-4 control-label required">
                                        Description
                                    </label>
                                    <div class="col-sm-6">
                                            <textarea class="form-control" rows="5" id="description"
                                                      name="description"
                                                      maxlength="1000">{{ $about->description}}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                        @endif

                                    </div>
                                </div>
                                <!--end Description-->
                            </div>
                            <div class="col-sm-4 align_center_content">
                                <!--LOGO-->
                                <div class="form-group">
                                    <img src="{{ Storage::url($about->img_about) }}" alt="img" class="avatar" width="200">
                                    <label for="logo" class="avatar-label">
                                        <input type="file" name="img_about" id="logo" accept="image/*">
                                    </label>
                                    <p class="avatar-text">IMG</p>
                                </div>
                                <!--end LOGO-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group align_center_content">
                                <div class="col-sm-6 col-sm-offset-4">
                                    <button type="submit" class="btn btn-danger">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection