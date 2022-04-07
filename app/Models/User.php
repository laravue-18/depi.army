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
        'name', 'username', 'email', 'image', 'provider', 'provider_id', 'provider_token', 'provider_refresh_token', 'password', 'wallet_id', 'referrer_id', 'discord_id', 'discord_token', 'discord_refresh_token', 'tweet_id'
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

    protected $appends = ['rank', 'score', 'share_link', 'referral_link', 'is_followed_twitter', 'is_join_discord', 'is_tweet'];

    public function getIsFollowedTwitterAttribute(){
//        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
//            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/following");
//
//        if(isset($response['detail'])) dd($response['detail']);
//
//        return $response->collect('data')->contains('id', env('TWITTER_FOLLOW_ID'));
        return true;
    }

    public function getIsJoinDiscordAttribute(){
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
        return true;
    }

    public function getIsTweetAttribute(){
        return $this->tweet_id;
    }

    public function getScoreAttribute(){
        $score = 0;

        $score += $this->countOfRankInBrigade('General') * 1000;
        $score += $this->countOfRankInBrigade('Colonel') * 500;
        $score += $this->countOfRankInBrigade('Major') * 250;
        $score += $this->countOfRankInBrigade('Captain') * 100;
        $score += $this->countOfRankInBrigade('Lieutenant') * 50;

        return $score;
    }

    public function getRankAttribute(){
        if($this->is_followed_twitter && $this->is_join_discord && $this->is_tweet){
            if($this->score < 500){
                return 'Lieutenant';
            }else if($this->score < 1000){
                return 'Captain';
            }else if($this->score < 2500){
                return 'Major';
            }else if($this->score < 5000){
                return 'Colonel';
            }else{
                return 'General';
            }
        }else{
            return 'Unactivated';
        }
    }

    public function getShareLinkAttribute(){
        return url(auth()->user()->username);
    }

    public function getReferralLinkAttribute()
    {
        return route('welcome', ['ref' => $this->username]);
    }

    public function referrer(){
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals(){
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function countInBrigade(){
        $count = 0;
        foreach($this->referrals as $referral){
            if($referral->rank == 'Unactivated') $count++;
        }
        return $count;
    }

    public function countOfRankInBrigade($rank){
        $count = 0;
        foreach($this->referrals as $referral){
            if($referral->rank == $rank) $count++;
        }
        return $count;
    }

    public function countOfRetweetOfDepiArmy(){
//        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
//            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/tweets?expansions=referenced_tweets.id.author_id")
//            ->json('includes.tweets');
//        return collect($response)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();
        return 2;
    }

    public function countOfReplyOfDepiArmy(){
        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
            ->get("https://api.twitter.com/2/users/" . env('TWITTER_FOLLOW_ID') . "/mentions?expansions=author_id")
            ->json('data');
        return collect($response)->where('author_id', $this->provider_id)->count();
    }

    public function countOfLikeOfDepiArmy(){
//        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
//            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/liked_tweets?expansions=author_id")
//            ->json('data');
//        return collect($response)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();
        return 7;
    }

    public function countsOfMyTweets(){
        $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
            ->get("https://api.twitter.com/2/users/" . $this->provider_id . "/tweets?tweet.fields=public_metrics")
            ->json('data');
        $temp = collect($response)->map(function($item){
            return $item["public_metrics"];
        });
        return [
            'retweet_count' => $temp->sum('retweet_count'),
            'reply_count' => $temp->sum('reply_count'),
            'like_count' => $temp->sum('like_count'),
        ];
    }
}
