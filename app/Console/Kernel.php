<?php

namespace App\Console;

use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->call(function(){
             $users = User::all();
             foreach($users as $user){
                 $response1 = Http::withToken(env('TWITTER_BEARER_TOKEN'))
                     ->get("https://api.twitter.com/2/users/" . $user->provider_id . "/tweets?expansions=referenced_tweets.id.author_id")
                     ->json('includes.tweets');
                 $depi_retweet_count = collect($response1)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();

                 $response2 = Http::withToken(env('TWITTER_BEARER_TOKEN'))
                     ->get("https://api.twitter.com/2/users/" . env('TWITTER_FOLLOW_ID') . "/mentions?expansions=author_id")
                     ->json('data');
                 $depi_reply_count = collect($response2)->where('author_id', $user->provider_id)->count();

                 $response3 = Http::withToken(env('TWITTER_BEARER_TOKEN'))
                     ->get("https://api.twitter.com/2/users/" . $user->provider_id . "/liked_tweets?expansions=author_id")
                     ->json('data');
                 $depi_like_count = collect($response3)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();

                 /** My Tweets */
                 $response = Http::withToken(env('TWITTER_BEARER_TOKEN'))
                     ->get("https://api.twitter.com/2/users/" . $user->provider_id . "/tweets?tweet.fields=public_metrics")
                     ->json('data');
                 $temp = collect($response)->map(function($item){
                     return $item["public_metrics"];
                 });

                 $your_retweet_count = $temp->sum('retweet_count');
                 $your_reply_count = $temp->sum('reply_count');
                 $your_like_count = $temp->sum('like_count');

                 DB::table('stats')->updateOrInsert([
                     'user_id' => $user->id,
                     'depi_retweet_count' => $depi_retweet_count,
                     'depi_reply_count' => $depi_reply_count,
                     'depi_like_count' => $depi_like_count,
                     'your_retweet_count' => $your_retweet_count,
                     'your_reply_count' => $your_reply_count,
                     'your_like_count' => $your_like_count,
                 ]);
             }
         })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
