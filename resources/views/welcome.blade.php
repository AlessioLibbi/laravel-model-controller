<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <ul class="d-flex flex-wrap list-unstyled">
        @foreach ($movies as $single_movie)
        <li class="d-flex">
            <div class="card " style="width: 18rem;">
                <img src="{{$single_movie->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$single_movie->title}}</h3>
                    <p class="card-text">{{$single_movie->date}}</p>
                    <p>{{$single_movie->vote}}</p>

                </div>
            </div>
        </li>
        @endforeach
    </ul>

</body>

</html>