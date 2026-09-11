<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang di halaman Medicine</h1>

    {{ $medicines }}

    <table>
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Harga Obat</th>
            <th>Tanggal kadaluwarsa</th>
            <th>Action</th>
        </tr>
        @foreach ($medicines as $item) 
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name}}</td>
            <td>{{  $item->price}}</td>
            <td>{{ $item->expired}}</td>
            <td>
                <a href="/obat/{{ $item->id }}">Detail</a>
                <a href="/obat/delete/{{ $item->id }}"> DELETE</a>
                <a href="/obat/edit/{{ $item->id }}">edit</a>
            </td>
        </tr>
        @endforeach
    </table>

 

    

    <a href="/obat/create">Tambah Obat</a>
</body>
</html>