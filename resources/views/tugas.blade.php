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
    <link rel="stylesheet" href="css/tugas.css">
</head>

<body>
    <a href="{{ route('room') }}" id="pindah">BACK</a>
    <div id="main">
        <div id="judul" class="bg">
            <h3>{{ $data->judul }}</h3>
            <p>{{ $data->soal }}</p>
        </div>
        <form id="soal" method="POST" action="{{ route('jawaban') }}">
            @csrf
            <div id="soal1" class="bg">
                <h3>Algorithm</h3>
                <div class="soal" id="pilgan">
                    <div>
                        <input type="radio" name="jawaban" id="a" value="1">
                        <label for="a">{{ $data->jwbA }}</label>
                    </div>
                    <div>
                        <input type="radio" name="jawaban" id="b" value="2">
                        <label for="b">{{ $data->jwbB }}</label>
                    </div>
                    <div>
                        <input type="radio" name="jawaban" id="c" value="3">
                        <label for="c">{{ $data->jwbC }}</label>
                    </div>
                    <div>
                        <input type="radio" name="jawaban" id="d" value="4">
                        <label for="d">{{ $data->jwbD }}</label>
                    </div>
                </div>
            </div>
            <div id="soal2" class="bg">
                <h3>Program Files</h3>
                <div class="soal">
                    <textarea name="kode" id="kode"></textarea>
                    <input type="submit" value="submit">
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                alert('{{ $error }}');
            @endforeach
        </script>
    @endif
    @if ($massage = Session::get('pesan'))
        <script>
            alert('{{ $massage }}');
        </script>
    @endif
</body>

</html>
