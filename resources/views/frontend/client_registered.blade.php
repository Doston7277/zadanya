<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="DataTables/dataTables.css"/>

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

<script type="text/javascript" src="jQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="DataTables/dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
    
</body>
</html>