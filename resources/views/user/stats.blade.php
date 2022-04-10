@extends('layouts.user')

@section('content')
<!-- admin content -->
<div class="admin-content">
    <div class="state-score">
        <h2>Score</h2>
        <h2>{{ $metrics['score'] }}</h2>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="state-score-card">
                <table>
                    <thead>
                    <th>Brigade</th>
                    <th>Qty</th>
                    <th>Points</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>General</td>
                        <td>{{ $metrics['brigade']['general_count'] }}</td>
                        <td>{{ $metrics['brigade']['general_count'] * 1000 }}</td>
                    </tr>
                    <tr>
                        <td>Colonel</td>
                        <td>{{ $metrics['brigade']['colonel_count'] }}</td>
                        <td>{{ $metrics['brigade']['colonel_count'] * 500 }}</td>
                    </tr>
                    <tr>
                        <td>Major</td>
                        <td>{{ $metrics['brigade']['major_count'] }}</td>
                        <td>{{ $metrics['brigade']['major_count'] * 250 }}</td>
                    </tr>
                    <tr>
                        <td>Captain</td>
                        <td>{{ $metrics['brigade']['captain_count'] }}</td>
                        <td>{{ $metrics['brigade']['captain_count'] * 100 }}</td>
                    </tr>
                    <tr>
                        <td>Lieutenant</td>
                        <td>{{ $metrics['brigade']['lieutenant_count'] }}</td>
                        <td>{{ $metrics['brigade']['lieutenant_count'] * 50 }}</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>
                            {{ $metrics['brigade']['general_count'] * 1000 + $metrics['brigade']['colonel_count'] * 500 + $metrics['brigade']['major_count'] * 250 + $metrics['brigade']['captain_count'] * 100 + $metrics['brigade']['lieutenant_count'] * 50 }}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="state-score-card">
                <table>
                    <thead>
                    <th>dePi Tweets</th>
                    <th>Qty</th>
                    <th>Points</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Retweets</td>
                        <td>{{ $metrics['depi_tweets']['retweet_count'] }}</td>
                        <td>{{ $metrics['depi_tweets']['retweet_count'] * 10 }}</td>
                    </tr>
                    <tr>
                        <td>Reply</td>
                        <td>{{ $metrics['depi_tweets']['reply_count'] }}</td>
                        <td>{{ $metrics['depi_tweets']['reply_count'] * 3}}</td>
                    </tr>
                    <tr>
                        <td>Like</td>
                        <td>{{ $metrics['depi_tweets']['like_count'] }}</td>
                        <td>{{ $metrics['depi_tweets']['like_count'] * 1 }}</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>
                            {{ $metrics['depi_tweets']['retweet_count'] * 10 + $metrics['depi_tweets']['reply_count'] * 3 + $metrics['depi_tweets']['like_count'] * 1 }}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="state-score-card">
                <table>
                    <thead>
                    <th>Your Tweets</th>
                    <th>Qty</th>
                    <th>Points</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Retweets</td>
                        <td>{{ $metrics['my_tweets']['retweet_count'] }}</td>
                        <td>{{ $metrics['my_tweets']['retweet_count'] * 10 }}</td>
                    </tr>
                    <tr>
                        <td>Reply</td>
                        <td>{{ $metrics['my_tweets']['reply_count'] }}</td>
                        <td>{{ $metrics['my_tweets']['reply_count'] * 3 }}</td>
                    </tr>
                    <tr>
                        <td>Like</td>
                        <td>{{ $metrics['my_tweets']['like_count'] }}</td>
                        <td>{{ $metrics['my_tweets']['like_count'] * 1 }}</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>
                            {{ $metrics['my_tweets']['retweet_count'] * 10 + $metrics['my_tweets']['reply_count'] * 3 + $metrics['my_tweets']['like_count'] * 1 }}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="score-key-head">
        <h2>Score Key</h2>
        <div class="admin-timeline-bar">
            <span></span>
        </div>
    </div>
    <div class="score-key-box">
        <div class="score-key-info">
            <h4>dePi Tweets</h4>
            <ul>
                <li>
                    <ul>
                        <li>Retweet</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Reply</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Like</li>
                        <li>+1 Pt</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="score-key-info score-key-border-left">
            <h4>Your Tweet</h4>
            <ul>
                <li>
                    <ul>
                        <li>Retweet</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Reply</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Like</li>
                        <li>+1 Pt</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="score-key-info score-key-border-left">
            <h4>Brigade</h4>
            <ul>
                <li>
                    <ul>
                        <li>Retweet</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Reply</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Like</li>
                        <li>+1 Pt</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="score-key-info">
            <ul>
                <li>
                    <ul>
                        <li>Captain</li>
                        <li>+10 Pt</li>
                    </ul>
                    <ul>
                        <li>Lieutenant</li>
                        <li>+10 Pt</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
