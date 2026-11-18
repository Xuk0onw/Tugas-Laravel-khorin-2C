<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Segitiga</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <h1>KALKULATOR LUAS SEGITIGA</h1>

        <form method="GET" action="/kalkulator/segitiga" onsubmit="location.href='/kalkulator/segitiga/'+this.alas.value+'/'+this.tinggi.value; return false;">
            <label for="alas">Alas</label>
            <input id="alas" name="alas" type="number" min="0" step="any" placeholder="contoh: 10" required>

            <label for="tinggi">Tinggi</label>
            <input id="tinggi" name="tinggi" type="number" min="0" step="any" placeholder="contoh: 5" required>

            <button type="submit">Hitung Luas</button>
        </form>

        @if (isset($error))
            <p class="error">{{ $error }}</p>
        @endif

        @if (isset($luas))
            <div class="hasil">
                <p>Alas: <strong>{{ $alas }}</strong></p>
                <p>Tinggi: <strong>{{ $tinggi }}</strong></p>
                <p class="rumus">Luas = 1/2 &times; {{ $alas }} &times; {{ $tinggi }} = <strong>{{ $luas }}</strong></p>
            </div>
        @endif

        <p class="nav"><a href="/daftar/mahasiswa">&larr; Ke Daftar Mahasiswa</a></p>
    </div>
</body>
</html>
