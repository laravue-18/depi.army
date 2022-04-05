<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'image', 'provider', 'provider_id', 'provider_token', 'provider_refresh_token', 'password', 'wallet_id', 'referrer_id'
    ];

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

    protected $appends = ['rank', 'score', 'share_link', 'referral_link'];

    public function getScoreAttribute(){
        return 2000;
    }

    public function getRankAttribute(){
        return 'general';
    }

    public function getShareLinkAttribute(){
        return url(auth()->user()->username);
    }

    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('welcome', ['ref' => $this->username]);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }
}
