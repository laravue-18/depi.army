<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Nette\InvalidStateException;

class UserController extends Controller
{
    public function welcome(Request $request, $username = null){
        if($username){
            session(['referrer' => $username]);
        }

        return view('guest.welcome');
    }

    public function mission(Request $request){
        return view('guest.mission');
    }

    public function ourteam(Request $request){
        return view('guest.ourteam');
    }

    public function roadmap(Request $request){
        return view('guest.roadmap');
    }

    public function enlist(Request $request){
        $request->validate([
            'wallet_id' => 'required'
        ]);
        session(['wallet_id' => $request['wallet_id']]);
        return Socialite::driver('twitter-oauth-2')
                ->scopes(['follows.read', 'follows.write', 'tweet.write'])
                ->redirect();
    }

    public function login(){
        return Socialite::driver('twitter-oauth-2')
            ->scopes(['follows.read', 'follows.write', 'tweet.write'])
            ->redirect();
    }

    public function callback()
    {
        try {
            $twitterUser = Socialite::driver('twitter-oauth-2')->user();

            $user = User::where('provider_id', $twitterUser->id)->first();

            if ($user) {
                $user->update([
                    'provider_token' => $twitterUser->token,
                    'provider_refresh_token' => $twitterUser->refreshToken,
                ]);
            } else if(session('wallet_id')) {
                $referrer = User::whereUsername(session()->pull('referrer'))->first();

                $user = User::create([
                    'name' => $twitterUser->name,
                    'username' => $twitterUser->nickname,
                    'email' => $twitterUser->email,
                    'wallet_id' => session('wallet_id'),
                    'provider' => 'twitter',
                    'provider_id' => $twitterUser->id,
                    'provider_token' => $twitterUser->token,
                    'provider_refresh_token' => $twitterUser->refreshToken,
                    'referrer_id' => $referrer ? $referrer->id : null,
                ]);
            } else{
                Session::flash('notRegistered', true);
                return redirect('/#enlistForm');
            }

            Auth::login($user);

            return redirect('/home');

        } catch (InvalidStateException $e) {
            dd($e->getMessage());
        }
    }

    public function activate(){
        $user = auth()->user();
        return view('user.activate')->with(compact('user'));
    }

    public function following(Request $request){
        $user = auth()->user();
        $response = Http::withToken($user->provider_token)
            ->post("https://api.twitter.com/2/users/" . $user->provider_id . "/following", [
                "target_user_id" => env('TWITTER_FOLLOW_ID')
            ])
            ->json();
        if($response['data']['following']){
            $t = now();
            $user->update(['following_at' => $t]);
            return ["success" => true, "following_at" => $t];
        }
    }

    public function redirectDiscord(){
        return Socialite::driver('discord')
            ->scopes(['guilds.join'])
            ->redirect();
    }

    public function callbackDiscord(){
        $discordUser = Socialite::driver('discord')->user();

        $response = Http::withHeaders([
            "Authorization" => "Bot " . env("DISCORD_BOT_TOKEN"),
            "Content-Type" => "application/json",
        ])->put("https://discordapp.com/api/guilds/" . env("DISCORD_SERVER_ID") . "/members/" . $discordUser->id, [
            "access_token" => $discordUser->token
        ]);

        auth()->user()->update([
            'discord_id' => $discordUser->id,
            'discord_token' => $discordUser->token,
            'discord_refresh_token' => $discordUser->refreshToken,
            'join_at' => now()
        ]);

        Session::flash('step', 2);
        return redirect('activate');
    }

    public function addEmail(Request $request){
        $email = $request->input('email');
        $user = auth()->user();
        $user->update([
            'email' => $email
        ]);

        return ["success" => true, "email" => $email];
    }

    public function tweet(Request $request){
        $text = $request->input('text');
        $user = auth()->user();
        $response = Http::withToken($user->provider_token)
            ->post("https://api.twitter.com/2/tweets/", [
                "text" => $text,
//                "media" => [
//                    "media_ids" => ["1515505841700413446"],
//                ]
            ])
            ->json();
        if(isset($response['detail'])){
            $request->session()->flash("error", $response['detail']);
        }
        if(isset($response['data']['id'])){
            auth()->user()->update([
                'tweet' => $response['data']['id'],
                'tweet_at' => now()
            ]);
            return ["success" => true, "tweet" => $response['data']['id']];
        }
        return ['success' => false];
    }

    public function dashboard(){
        $user = auth()->user();
        $metrics = $user->metrics();
        return view('user.index')->with(compact('user', 'metrics'));
    }

    public function rank(){
        $user = auth()->user();
        $metrics = $user->metrics();
        return view('user.rank')->with(compact('user', 'metrics'));
    }

    public function stats(){
        $user = auth()->user();
        $metrics = $user->metrics();
        return view('user.stats')->with(compact('user', 'metrics'));
    }

    public function profile(){
        return view('profile');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
