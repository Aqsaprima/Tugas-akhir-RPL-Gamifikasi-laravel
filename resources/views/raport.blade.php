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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/raport.css') }}">
</head>

<body>
    <a href="{{ route('homedos') }}" id="pindah">BACK</a>
    <img id="logo" src="img/logo.png" alt="">
    <div id="main">
        <p id="judul">Report</p>
        <div id="cont">
            @foreach ($data as $d)
                <form method="POST" action="{{ route('accept') }}" class="list">
                    @csrf
                    <input type="hidden" name="npm" value="{{ $d->npm }}">
                    <p class="npm">{{ $d->npm }}</p>
                    <a href="{{ route('lihatrapot',['id' => $d->id]) }}"><img src="img/lihat.png" alt="" class="mata"></a>
                    <img src="img/silang.png" alt="" class="silang">
                    <label for="sub{{ $d->id }}"><img class="check" src="img/centang.png" alt=""></label>
                    <input type="submit" id="sub{{ $d->id }}" value="submit" class="hide">
                </form>
            @endforeach
        </div>
    </div>
    @if ($massage = Session::get('berhasil'))
        <script>
            alert('{{ $massage }}');
        </script>
    @endif
</body>

</html>
