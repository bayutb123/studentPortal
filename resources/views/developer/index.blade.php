<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h2>Migration List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Detail</th>
            <th>Batch</th>
        </tr>
        @foreach($migration as $key => $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->migration }}</td>
            <td>{{ $data->batch }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>