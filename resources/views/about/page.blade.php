<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset ('js/main.js') }}"></script>
</head>
<body>
<div class="container">
    <div class=" about_list">
        <div class="row parent_about">
            <h2 class="title col-xs-12">{{$about->title}}</h2>
            <p class="description col-xs-12" >{{$about->updated_at}}</p>
            <div class="col-xs-12 mtop20">
                    <a href="{{route('page',['id'=>$about->id])}}"><img src="{{ Storage::url($about->img_about) }}" alt="img"  title="img" height="400"></a>
                </div>
                <div class="col-xs-8 text-left mtop20">
                    <p class="description">{{$about->description}}</p>

                </div>

        </div>
    </div>
</div>
</body>
</html>