<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <input type="text" name="token" placeholder="token">
        <input type="number" name="estado" placeholder="estado">
        <input type="email" name="email" placeholder="Correo">
        <input type="password" name="password" placeholder="contraseña">
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
        <input type="submit" value="confirmar">
    </form>
</body>
</html>