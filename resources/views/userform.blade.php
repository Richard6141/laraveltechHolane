<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('usersup') }}" method="POST">
        @csrf
        <input type="text" value="{{$user->name}}" name="name">
        <input type="email" value="{{$user->email}}" name="email">
        <input type="hidden" value="{{$user->id}}" name="id">
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>