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
    <link rel="stylesheet" href="css/homeSiswa.css">
</head>

<body>
    <p>NPM: {{ session('npm') }}</p>
    <img src="img/logo.png" alt="">
    <div id="main">
        <a href="{{ route('selectLevel') }}"><button class="pil">SELECT LEVEL</button></a>
        <a href="{{ route('outmhs') }}"><button class="pil">LOG OUT</button></a>
    </div>
</body>

</html>
