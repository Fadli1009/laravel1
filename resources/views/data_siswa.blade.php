<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data siswa</title>
</head>
<body>
    @foreach ($data as $item)
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
        </tr>

    </table>
    @endforeach
</body>
</html>