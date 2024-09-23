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
    <link rel="stylesheet" href="css/selectLevel.css">
</head>

<body>
    <a href="{{ route('homemhs') }}" id="pindah">BACK</a>
    <img id="logo" src="img/logo.png" alt="">
    <div id="main" class="flexCol">

        <div id="row" class="flexRow">
            @foreach ($data as $d)
                <div id="kotak1" class="flexCol">
                    <div class="flexRow">
                        <img class="logoMateri" src="img/{{ $d->img }}" alt=""><!--logo tugas-->
                        <div class="flexCol nogap">
                            <p>{{ $d->judul }}</p>
                            <p>Req Power: {{ $d->power }}</p>
                        </div>
                    </div>
                    <form action="{{ route('tokenlevel') }}" class="flexRow" method="post">
                        @csrf
                        <input type="text" name="id" class="hide" value="{{ $d->power + 1 }}">
                        <input id="cek" name="token" type="text" placeholder="Insert Token">
                        <label for="submit"><img class="check" src="img/check.png" alt=""></label>
                        <input type="submit" id="submit" value="submit" class="hide">
                    </form>
                </div>
            @endforeach
        </div>
        <a href="{{ route('status') }}"><button class="pil">VIEW STATUS</button></a>
    </div>
    @if ($massage = Session::get('failed'))
        <script>
            alert('{{ $massage }}');
        </script>
    @endif
</body>

</html>
