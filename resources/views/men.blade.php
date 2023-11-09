<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bio</title>
</head>
<body>
    <h1>Halaman Pakaian Pria</h1>
        @foreach($menlist as $data)
        <li>{{ $data->merk }} | {{ $data->jenis_pakaian }} | {{ $data->warna }} | {{ $data->ukuran }} | {{ $data->deskripsi }} | Rp{{ $data->harga }}
        </li>
        @endforeach
</body>
</html>