<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel-Model-Controller</title>
</head>
<body>
    <div class="container">
        <div class="my-container d-flex flex-wrap">
            @foreach($moviesList as $movie)
                <div class="card my-card">
                    <div class="card-body">
                        <div class="card-title movie-title">
                            <h5>{{ $movie['title'] }}</h5>
                        </div>
                        <div class="card-subtitle">
                            <h6>{{ $movie['original_title'] }}</h6>
                        </div>
                        <div>
                            <span>Nationality: {{ $movie['nationality'] }}</span> <br>
                            <span>Release date: {{ $movie['date'] }}</span> <br>
                            <span>Vote: {{ $movie['vote'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>