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
    <link rel="stylesheet" href="css/boss.css">
</head>

<body>
    <a href="{{ route('status') }}" id="pindah">BACK</a>
    <img id="bos" src="img/bos.png" alt="">
    <div id="tulisan">
        <p>{{ $data[0]->kata }}</p>
        <div id="nav">
            <p id="prev" onclick="prev()">Prev</p>
            <p id="next" onclick="next()">Next</p>
        </div>
    </div>
    <div id="jurus">
        <div id="kosong"></div>
        <div id="elemen">
            @if ( $mhs->power >= 1)
                <img src="img/api.png" onclick="gagal()" alt="">
            @endif
            @if ( $mhs->power >= 2)
                <img src="img/es.png" onclick="gagal()" alt="">
            @endif
            @if ( $mhs->power >= 3)
                <img src="img/angin.png" onclick="gagal()" alt="">
            @endif
            @if ( $mhs->power >= 4)
                <img src="img/tanah.png" onclick="gagal()" alt="">
            @endif
        </div>
        <div id="allin">
            @if ( $mhs->power >= 4)
                <img src="img/skillAll.png" onclick="berhasil()" alt="">
            @endif
        </div>
    </div>

    <script>
        var teks = @json($data);
        var tulisan = document.getElementById('tulisan').children[0];
        var id = 0;
        var nav = document.getElementById('nav');
        var sebelum = document.getElementById('prev');
        var sesudah = document.getElementById('next');
        var jurus = document.getElementById('jurus');

        if (id == 0) {
            sebelum.style.display = 'none';
            nav.style.justifyContent = 'end';
        }

        function prev() {
            if (id > 0) {
                id--;
                tulisan.innerHTML = teks[id]['kata'];
                if (id == 0) {
                    sebelum.style.display = 'none';
                    nav.style.justifyContent = 'end';
                } else {
                    sesudah.style.display = 'block';
                    sesudah.innerHTML = 'Next';
                    sesudah.onclick = next;
                }
            }
            if (id == teks.length - 2){
                sesudah.innerHTML = "Next";
                sesudah.onclick = next;
            }
        }

        function next() {
            if (id < teks.length - 1) {
                id++;
                tulisan.innerHTML = teks[id]['kata'];
                sebelum.style.display = 'block';
                nav.style.justifyContent = 'space-between';
            }
            if (id == teks.length - 1) {
                sesudah.innerHTML = 'Lawan';
                sesudah.onclick = function() {
                    tulisan.style.display = 'none';
                    jurus.style.display = 'flex';
                    document.getElementById('tulisan').style.display = 'none';
                    document.getElementById('jurus').style.display = 'flex';
                };
            }
        }

        function gagal(){
            alert('Anda belum cukup kuat, belajar lagi!!');
        }

        function berhasil(){
            alert('Anda berhasil mengalahkan boss!!');
        }
    </script>
</body>

</html>
