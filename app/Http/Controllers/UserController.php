<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function enlist(Request $request){
        $request->validate([
            'wallet_id' => 'required'
        ]);
        session(['wallet_id' => $request['wallet_id']]);
        return Socialite::driver('twitter-oauth-2')
                ->scopes(['users.read', 'tweet.read', 'follows.write', 'offline.access'])
                ->redirect();
    }

    public function login(){
        return Socialite::driver('twitter-oauth-2')
            ->scopes(['follows.write'])
            ->redirect();
    }

    public function redirectDiscord(){
        return Socialite::driver('discord')
            ->scopes(['guilds.join'])
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
                $user = User::create([
                    'name' => $twitterUser->name,
                    'username' => $twitterUser->nickname,
                    'email' => $twitterUser->email,
                    'wallet_id' => session('wallet_id'),
                    'provider' => 'twitter',
                    'provider_id' => $twitterUser->id,
                    'provider_token' => $twitterUser->token,
                    'provider_refresh_token' => $twitterUser->refreshToken,
                ]);
            } else{
                Session::flash('notRegistered', true);
                return redirect('/');
            }

            Auth::login($user);

            return redirect('/home');

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function callbackDiscord(){
        $discordUser = Socialite::driver('discord')->user();

        $response = Http::withHeaders([
            "Authorization" => "Bot OTYwNTQzNDYxNjAwMjk3MDMw.Ykr9zw.TrJwUyqcuBZPSRpXgEIg4PmxmwU",
            "Content-Type" => "application/json",
        ])->put("https://discordapp.com/api/guilds/960618005463715860/members/" . $discordUser->id, [
            "access_token" => $discordUser->token
        ]);

        return redirect('/home');
    }

    public function dashboard(){
        $user = auth()->user();
        return view('dashboard')->with(compact('user'));
    }

    public function following(Request $request){
        $user = auth()->user();
        $response = Http::withToken($user->provider_token)
            ->post("https://api.twitter.com/2/users/" . $user->provider_id . "/following", [
                "target_user_id" => "1502967806517817349"
            ]);
        $request->session()->flash("following", $response->json('data.following'));
        return redirect()->back();
    }

    public function profile(){
        return view('profile');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
