<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        @foreach($users as $user)
        <tr>


            <td>{{$user->id}}</td>
            <td>Nom : {{$user->name}}</td>
            <td>Email: {{$user->email}}</td>

        </tr>
        @endforeach
    </table>
</body>

</html>