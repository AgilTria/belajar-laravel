<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    <h1>Ini Data Guru</h1>

    <table border = 1>

        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>NoHP</th>
        <th>NPWP</th>
        <th>email</th>



    @foreach ($guru as $c)

    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$c->nama}}</td>
        <td>{{$c->NIK}}</td>
        <td>{{$c->Nohandphone}}</td>
        <td>{{$c->NPWP}}</td>
        <td>{{$c->email}}</td>
    </tr>

    {{-- <p> Judul : {{$item->Judul}}</p> --}}

    @endforeach
</table>
</body>
</html>
