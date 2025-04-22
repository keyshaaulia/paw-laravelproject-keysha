<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu</title>
</head>
<body>
    <h1>Daftar Menu</h1>
    <table border="1">
        <tr>
            <th>Menu</th>
            <th>harga</th>
            <th>jumlah</th>
        </tr>
        @foreach($data as $menu)
        <tr>
            <td>{{ $menu->menu }}</td>
            <td>{{ $menu->harga }}</td>
            <td>{{ $menu->jumlah }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>