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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/status.css">
</head>

<body>
    <a href="{{ route('selectLevel') }}" id="pindah">BACK</a>
    <img src="img/logo.png" alt="">
    <div id="main">
        <div>
            <label for="power">POWER</label>
            <progress id="power" value="{{ $data->power }}" max="4"></progress>
            <label for="power">{{ $data->power }}</label>
        </div>
        <a href="/boss"><button class="pil">DEFEAT BOSS</button></a>
    </div>
</body>

</html>
