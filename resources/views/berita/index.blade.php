<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini berita</h1>

    <table border = 1>

        <th>No</th>
        <th>Judul</th>
        <th>Konten</th>
        <th>Penulis</th>


    @foreach ($berita as $item)

    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->Judul}}</td>
        <td>{{$item->Konten}}</td>
        <td>{{$item->Penulis}}</td>
    </tr>

    {{-- <p> Judul : {{$item->Judul}}</p> --}}

    @endforeach
</table>
</body>
</html>
