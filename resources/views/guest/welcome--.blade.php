<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="login">Login</a>
<form action="enlist" method="post">
    @csrf
    <input type="text" name="wallet_id" required>
    <button type="submit">Join the dePi Army!</button>
</form>
@if(Session::has('notRegistered'))
    <h1>Enlist Now</h1>
@endif
</body>
</html>
