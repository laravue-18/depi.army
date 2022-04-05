<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

@if(Session::get('following'))
    Following
@endif

<a href="/{{ auth()->user()->username }}">https://depi.army//{{ auth()->user()->username }}</a>
<br><br><br>

<form action="following" method="post">
    @csrf
    <span>https://twitter.com/depi_army</span>
    <button type="submit">Follow</button>
</form>

<br><br><br>

<p>Join Our Discord Server: <a href="/discord">Join Now</a></p>

<p>Rank: {{ $user->rank }}</p>
<p>Score: {{ $user->score }}</p>

<form action="logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
