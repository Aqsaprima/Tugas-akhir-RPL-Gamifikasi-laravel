<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">

    <title>Code Dungeon</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/room.css') }}">
</head>

<body>
    <a href="{{ route('selectLevel') }}" id="pindah">BACK</a>
    <p id="inst">Click door to begin the task<br>Click book to study</p>
    <a href="{{ route('tugas') }}"><img src="{{ asset('img/pintu.png') }}" id="pintu" alt=""></a>
    <a href="{{ route('materi') }}"><img src="{{ asset('img/buku.png') }}" id="buku" alt=""></a>
</body>

</html>
