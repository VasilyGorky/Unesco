<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Активация регистрации нового ползователя</title>
</head>
<body>
<h1>Спасибо за регистрацию, {{$user->firstname}} {{$user->secondname}}!</h1>

<p>
    Перейдите <a href='{{ url("register/confirm/{$user->remember_token}") }}'>по ссылке </a>чтобы завершить регистрацию!
</p>
</body>
</html>