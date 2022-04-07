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
<br>
<p>Join Our Discord Server: <a href="/discord">Join Now</a></p>
<br>
<form action="tweet" method="post">
    @csrf
    <p>Join My Brigade {{ $user->share_link }}</p>
    <button type="submit">Tweet</button>
</form>
<br>
<p>Rank: {{ $user->rank }}</p>
<p>Score: {{ $user->score }}</p>
<br>
<b>My Brigade</b>
<p>General: {{ $user->countOfRankInBrigade('General') }}</p>
<p>Colonel: {{ $user->countOfRankInBrigade('Colonel') }}</p>
<p>Major: {{ $user->countOfRankInBrigade('Major') }}</p>
<p>Captain: {{ $user->countOfRankInBrigade('Captain') }}</p>
<p>Lieutenant: {{ $user->countOfRankInBrigade('Lieutenant') }}</p>
<p>Unactivated: {{ $user->countOfRankInBrigade('Unactivated') }}</p>
<br>
<b>Depi Tweets</b>
<p>Retweet: {{ $user->countOfRetweetOfDepiArmy() }}</p>
<p>Reply: {{ $user->countOfReplyOfDepiArmy() }}</p>
<p>Like: {{ $user->countOfLikeOfDepiArmy() }}</p>

<b>Your Tweets</b>
<p>Retweet: {{ $user->countsOfMyTweets()['retweet_count'] }}</p>
<p>Reply: {{ $user->countsOfMyTweets()['reply_count'] }}</p>
<p>Like: {{ $user->countsOfMyTweets()['like_count'] }}</p>

<form action="logout" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
</body>
</html>
