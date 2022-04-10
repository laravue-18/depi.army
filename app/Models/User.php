<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'image',
        'provider',
        'provider_id',
        'provider_token',
        'provider_refresh_token',
        'password',
        'wallet_id',
        'referrer_id',
        'discord_id',
        'discord_token',
        'discord_refresh_token',
        'following_at',
        'join_at',
        'tweet_at',
        'tweet_id'
    ];

    protected $guarded = ['referral_link'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['metrics'];

    public function getShareLinkAttribute(){
        return url(auth()->user()->username);
    }

    public function getReferralLinkAttribute(){
        return route('welcome', ['ref' => $this->username]);
    }

    public function referrer(){
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals(){
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function metrics(){
        $result['score'] = 0;

        $result['brigade']['total_count'] = count($this->referrals);
        $result['brigade']['general_count'] = 0;
        $result['brigade']['colonel_count'] = 0;
        $result['brigade']['major_count'] = 0;
        $result['brigade']['captain_count'] = 0;
        $result['brigade']['lieutenant_count'] = 0;
        $result['brigade']['unactivated_count'] = 0;

        if(count($this->referrals)){
            foreach($this->referrals as $referral){
                switch($referral->metrics()['rank']){
                    case 'General':
                        $result['brigade']['general_count']++;
                        break;
                    case 'Colonel':
                        $result['brigade']['colonel_count']++;
                        break;
                    case 'Major':
                        $result['brigade']['major_count']++;
                        break;
                    case 'Captain':
                        $result['brigade']['captain_count']++;
                        break;
                    case 'Lieutenant':
                        $result['brigade']['lieutenant_count']++;
                        break;
                    case 'Unactivated':
                        $result['brigade']['unactivated_count']++;
                        break;
                }
            }
        }

        /** Depi Tweets */
        $response1 = Http::withToken(env('TWITTER_BEARER_TOKEN'))
            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/tweets?expansions=referenced_tweets.id.author_id")
            ->json('includes.tweets');
        $result['depi_tweets']['retweet_count'] = collect($response1)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();

        $response2 = Http::withToken(env('TWITTER_BEARER_TOKEN'))
            ->get("https://api.twitter.com/2/users/" . env('TWITTER_FOLLOW_ID') . "/mentions?expansions=author_id")
            ->json('data');
        $result['depi_tweets']['reply_count'] = collect($response2)->where('author_id', $this->provider_id)->count();

        $response3 = Http::withToken(env('TWITTER_BEARER_TOKEN'))
            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/liked_tweets?expansions=author_id")
            ->json('data');
        $result['depi_tweets']['like_count'] = collect($response3)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();

        /** My Tweets */
        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/tweets?tweet.fields=public_metrics")
            ->json('data');
        $temp = collect($response)->map(function($item){
            return $item["public_metrics"];
        });

        $result['my_tweets'] = [
            'retweet_count' => $temp->sum('retweet_count'),
            'reply_count' => $temp->sum('reply_count'),
            'like_count' => $temp->sum('like_count'),
        ];

        /** Score */
        $result['score'] += $result['depi_tweets']['retweet_count'] * 10;
        $result['score'] += $result['depi_tweets']['reply_count'] * 3;
        $result['score'] += $result['depi_tweets']['like_count'] * 1;

        $result['score'] += $result['my_tweets']['retweet_count'] * 10;
        $result['score'] += $result['my_tweets']['reply_count'] * 3;
        $result['score'] += $result['my_tweets']['like_count'] * 1;

        $result['score'] += $result['brigade']['general_count'] * 1000;
        $result['score'] += $result['brigade']['colonel_count'] * 500;
        $result['score'] += $result['brigade']['major_count'] * 250;
        $result['score'] += $result['brigade']['captain_count'] * 100;
        $result['score'] += $result['brigade']['lieutenant_count'] * 50;

        if($this->following_at && $this->join_at && $this->tweet_at){
            if($result['score'] < 500){
                $result['rank'] = 'Lieutenant';
            }else if($result['score'] < 1000){
                $result['rank'] = 'Captain';
            }else if($result['score'] < 2500){
                $result['rank'] = 'Major';
            }else if($result['score'] < 5000){
                $result['rank'] = 'Colonel';
            }else{
                $result['rank'] = 'General';
            }
        }else{
            $result['rank'] = 'Unactivated';
        }

        return $result;
    }

    public function getMyTweetsAttribute(){
//        return ['retweet_count' => 3, 'reply_count' => 2, 'like_count' => 7];


    }

//    public function getIsFollowedTwitterAttribute(){
//        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
//            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/following");
//        if(isset($response['detail'])) dd($response['detail']);
//        return $response->collect('data')->contains('id', env('TWITTER_FOLLOW_ID'));
//    }

//    public function getIsJoinDiscordAttribute(){
//        $response = Http::withHeaders([
//            "Authorization" => "Bot " . env("DISCORD_BOT_TOKEN"),
//            "Content-Type" => "application/json",
//        ])
//            ->get("https://discordapp.com/api/guilds/" . env("DISCORD_SERVER_ID") . "/members/" . $this->discord_id)
//            ->json();
//
//        if(isset($response['joined_at'])){
//            return $response['joined_at'];
//        }
//
//        return false;
//    }

//    public function getIsTweetAttribute(){
//        return $this->tweet_id;
//    }

}
