<!DOCTYPE html>
<html>
<head>
    <title>Daftar Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eee;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: pink;
        }
        tr:hover {
            background-color: #ddd;
        }
        .logout {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Daftar Menu</h1>

    <div class="logout">
        <a href="/logout">Logout</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->menu }}</td>
                    <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
