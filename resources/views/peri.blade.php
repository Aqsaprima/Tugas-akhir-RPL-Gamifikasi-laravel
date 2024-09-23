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
    <link rel="stylesheet" href="css/peri.css">
</head>

<body>
    <a href="{{ route('logmhs') }}" id="pindah">BACK</a>
    <img id="bos" src="img/peri.png" alt="">
    <div id="tulisan">
        <p>{{ $data[0]->kata }}</p>
        <div id="nav">
            <p id="prev" onclick="prev()">Prev</p>
            <p id="next" onclick="next()">Next</p>
        </div>
    </div>

    <script>
        var teks =  {{ Js::from($data) }};
        var tulisan = document.getElementById('tulisan').children[0];
        var id = 0;
        var nav = document.getElementById('nav');
        var sebelum = document.getElementById('prev');
        var sesudah = document.getElementById('next');

        if (id == 0) {
            sebelum.style.display = 'none';
            nav.style.justifyContent = 'end';
        }

        function prev() {
            id--;
            if (id == 0) {
                sebelum.style.display = 'none';
                nav.style.justifyContent = 'end';
            }
            if (id != teks.length - 1) {
                sesudah.style.display = 'block';
                sesudah.innerHTML = "Next";
                sesudah.onclick = next;
            }
            tulisan.innerHTML = teks[id]['kata'];
        }

        function next() {
            id++;
            if (id != 0) {
                sebelum.style.display = 'block';
                nav.style.justifyContent = 'space-between';
            }
            if (id == teks.length - 1) {
                sesudah.innerHTML = "Start";
                sesudah.onclick = function() {
                    window.location.href = '{{ route('homemhs') }}';
                };
            }
            tulisan.innerHTML = teks[id]['kata'];
        }
    </script>
</body>

</html>
