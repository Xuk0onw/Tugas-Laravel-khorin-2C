<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <h1>DAFTAR MAHASISWA</h1>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                    <tr>
                        <td>{{ $m['nama'] }}</td>
                        <td>{{ $m['alamat'] }}</td>
                        <td>{{ $m['gender'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p class="nav"><a href="/kalkulator/segitiga">Ke Kalkulator Segitiga &rarr;</a></p>
    </div>
</body>
</html>
