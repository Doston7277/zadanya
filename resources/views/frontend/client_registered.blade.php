<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">

    <title>Ro'yxatdan o'tgan mijozlar</title>
</head>
<body>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Familiya</th>
            <th>Ism</th>
            <th>Otasini ismi</th>
            <th>Fuqarolik</th>
            <th>Pasport seriyasi</th>
            <th>Pasport raqami </th>
            <th>Ro'yxatdan o'tish sanasi</th>
            <th>Chiqish sanasi</th>
            <th>Xona toifasi</th>
            <th>Xona turi</th>
            <th>Xona raqami</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->surname }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->fullname }}</td>
            <td>{{ $client->citizenship }}</td>
            <td>{{ $client->passport_series }}</td>
            <td>{{ $client->passport_number }}</td>
            <td>{{ $client->register_date }}</td>
            <td>{{ $client->release_date }}</td>
            <td>{{ $client->room_category }}</td>
            <td>{{ $client->room_type }}</td>
            <td>{{ $client->room_number }}</td>
        </tr>
    @endforeach        
    </tbody>
</table>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
    
</body>
</html>