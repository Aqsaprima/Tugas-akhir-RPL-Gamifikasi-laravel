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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/materi.css">
</head>

<body>
    <a href="{{ route('room') }}" id="pindah">BACK</a>
    <div id="main">
        <p id="judul">{{ $data->judul }}</p>
        <a href="{{ $data->materi }}">
            <p id="linkD" class="pil">Materi</p>
        </a>
    </div>
</body>

</html>
