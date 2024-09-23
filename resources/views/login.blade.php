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
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <a href="{{ route('home') }}" id="pindah">BACK</a>
    <div id="main">
        <img src="img/logo.png" alt="">
        <form action="{{ route('loginauth') }}" method="post" id="form">
            @csrf
            <p id="judul">LOGIN MAHASISWA</p>
            <input type="text" id="npm" name="npm" placeholder="NPM">
            <input type="password" id="pass" name="pass" placeholder="Password">
            <input type="submit" value="LOGIN" id="tombolLogin">
        </form>
        <div id="stdltr">
            <button id="std">Student</button>
            <a href="{{ route('logdos') }}"><button id="ltr"> Lecturer</button></a>
        </div>
    </div>
    @if ($massage = Session::get('failed'))
    <script>
        alert('{{ $massage }}');
    </script>
    @endif
</body>

</html>
