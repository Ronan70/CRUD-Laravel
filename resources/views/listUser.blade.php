<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Dealhes do Usuario</title>
</head>
<body>

    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    <p>{{ date('d/m/y H:i', strtotime($user->created_at)) }}</p>

</body>
</html>
