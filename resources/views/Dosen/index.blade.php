<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    <h1>Ini Data Dosen</h1>

    <table border = 1>

        <th>No</th>
        <th>Nama</th>
        <th>Slug</th>
        <th>NIK</th>
        <th>NoHP</th>
        <th>NPWP</th>
        <th>email</th>



    @foreach ($dosen as $c)

    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$c->nama}}</td>
        <td>{{$c->slug}}</td>
        <td>{{$c->nik}}</td>
        <td>{{$c->phone}}</td>
        <td>{{$c->npwp}}</td>
        <td>{{$c->email}}</td>
    </tr>

    {{-- <p> Judul : {{$item->Judul}}</p> --}}

    @endforeach
</table>
</body>
</html>
