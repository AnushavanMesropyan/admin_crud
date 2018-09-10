@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add about</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('about.store') }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-8">
                                <!-- Tittle-->
                                <div class="form-group">
                                    <label for="title" class="col-sm-4 control-label required">Title</label>

                                    <div class="col-sm-6">
                                        <input id="title" type="text" class="form-control"
                                               name="title" value="{{ old('title') }}" required autofocus>
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
                                                      maxlength="1000">{{ old('description') }}</textarea>
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
                                    <img src="{{asset('/images/image.png')}}" alt="img" class="avatar" width="200">
                                    <label for="logo" class="avatar-label">
                                        <input type="file" name="img_about" id="logo" required="required"
                                               accept="image/*">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection