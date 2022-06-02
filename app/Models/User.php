<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

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
        'provider_token_secret',
        'password',
        'wallet_id',
        'referrer_id',
        'discord_id',
        'discord_token',
        'discord_refresh_token',
        'following_at',
        'join_at',
        'tweet_at',
        'tweet'
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

    protected $appends = [];

    public function getShareLinkAttribute(){
        return route('referral', $this->username);
    }

    public function getReferralLinkAttribute(){
        return route('referral', $this->username);
    }

    public function referrer(){
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals(){
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function stat(){
        return $this->hasOne(Stat::class);
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

        $stat = DB::table('stats')->where('user_id', $this->id)->first();

        $result['depi_tweets'] = [
            'retweet_count' => $stat ? $stat->depi_retweet_count : 0,
            'reply_count' => $stat ? $stat->depi_reply_count : 0,
            'like_count' => $stat ? $stat->depi_like_count : 0,
        ];

        $result['my_tweets'] = [
            'retweet_count' => $stat ? $stat->your_retweet_count : 0,
            'reply_count' => $stat ? $stat->your_reply_count : 0,
            'like_count' => $stat ? $stat->your_like_count : 0,
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
}
