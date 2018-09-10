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
                 @foreach($abouts as $about)
                      <div class="col-xs-4 mtop20">
                          <a href="{{route('page',['id'=>$about->id])}}"><img src="{{ Storage::url($about->img_about) }}" alt="img"  title="img" width="300px"></a>
                      </div>
                     <div class="col-xs-8 text-left mtop20">
                         <a href="{{route('page',['id'=>$about->id])}}" class="title"><h3 >{{$about->title}}</h3></a>
                         <p class="description">{{$about->description}}</p>

                     </div>
                     @endforeach

                 </div>
             </div>
         </div>
    </body>
</html>
