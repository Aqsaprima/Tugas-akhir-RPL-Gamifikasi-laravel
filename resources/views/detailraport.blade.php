<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">

    <title>Code Dungeon</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detailraport.css') }}">
</head>

<body>
    <a href="{{ route('raport') }}" id="pindah">BACK</a>
    <img id="logo" src="img/logo.png" alt="">
    <div id="main">
        <p id="judul">Report</p>
        <div id="sc">
            <p>
                {{ $data->npm }}
                <br>
                <br>
                {{ $level->judul }}
                <br>
                <br>
                @if ($data->jwbAlgo == 1)
                    {{ $level->jwbA }}
                @elseif ($data->jwbAlgo == 2)
                    {{ $level->jwbB }}
                @elseif ($data->jwbAlgo == 3)
                    {{ $level->jwbC }}
                @elseif ($data->jwbAlgo == 4)
                    {{ $level->jwbD }}
                @endif
                <br>
                <br>
                {{ $data->jwbCode }}
            </p>
        </div>
    </div>
</body>

</html>
