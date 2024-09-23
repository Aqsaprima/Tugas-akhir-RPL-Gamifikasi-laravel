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
    <link rel="stylesheet" href="css/addTask.css">
</head>

<body>
    <a href="{{ route('homedos') }}" id="pindah">BACK</a>
    <img src="img/logo.png" alt="">
    <form action="{{ route('uploadSoal') }}" method="post" class="flexcol">
        @csrf
        <div id="sect1" class="flexrow">
            <div>
                <p class="judul">Tulis Soal</p>
                <input type="text" name="soal" id="soal">
            </div>
            <div>
                <select name="materi" id="materi">
                    <option value="">Pilih Materi</option>
                    <option value="1">Looping</option>
                    <option value="2">Branching</option>
                    <option value="3">Function</option>
                    <option value="4">Recursive</option>
                </select>
            </div>
        </div>

        <div id="sect2" class="flexrow">
            <div>
                <p class="judul">Tulis Jawaban</p>
                <div id="cont1" class="flexrow">
                    <div id="labels" class="flexcol">
                        <label for="jwb1">A</label>
                        <label for="jwb2">B</label>
                        <label for="jwb3">C</label>
                        <label for="jwb4">D</label>
                    </div>
                    <div id="inputs" class="flexcol">
                        <div class="input-checkbox-container">
                            <input type="text" name="jwb1" id="jwb1" placeholder="Tulis Jawaban A">
                            <input type="radio" name="jawaban" value="1" id="cb1">
                        </div>
                        <div class="input-checkbox-container">
                            <input type="text" name="jwb2" id="jwb2" placeholder="Tulis Jawaban B">
                            <input type="radio" name="jawaban" value="2" id="cb2">
                        </div>
                        <div class="input-checkbox-container">
                            <input type="text" name="jwb3" id="jwb3" placeholder="Tulis Jawaban C">
                            <input type="radio" name="jawaban" value="3" id="cb3">
                        </div>
                        <div class="input-checkbox-container">
                            <input type="text" name="jwb4" id="jwb4" placeholder="Tulis Jawaban D">
                            <input type="radio" name="jawaban" value="4" id="cb4">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="SIMPAN">
        </div>

        <div id="sect3" class="flexrow">
            <input type="text" name="url" id="url" placeholder="Link URL Materi">
        </div>

    </form>
    @if ($errors->any())
        <script>
            let errorMessages = '';
            @foreach ($errors->all() as $error)
                errorMessages += '{{ $error }}\n';
            @endforeach
            alert(errorMessages);
        </script>
    @endif
    @if ($message = Session::get('pesan'))
        <script>
            alert('{{ $message }}');
        </script>
    @endif
</body>

</html>
