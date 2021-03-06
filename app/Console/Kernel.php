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
             $token = env('TWITTER_BEARER_TOKEN');
             foreach($users as $user){
                 $response1 = Http::withToken($token)
                     ->get("https://api.twitter.com/2/users/" . $user->provider_id . "/tweets?expansions=referenced_tweets.id.author_id")
                     ->json('includes.tweets');
                 $depi_retweet_count = collect($response1)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();

                 $response2 = Http::withToken($token)
                     ->get("https://api.twitter.com/2/users/" . env('TWITTER_FOLLOW_ID') . "/mentions?expansions=author_id")
                     ->json('data');
                 $depi_reply_count = collect($response2)->where('author_id', $user->provider_id)->count();

                 $response3 = Http::withToken($token)
                     ->get("https://api.twitter.com/2/users/" . $user->provider_id . "/liked_tweets?expansions=author_id")
                     ->json('data');
                 $depi_like_count = collect($response3)->where('author_id', env('TWITTER_FOLLOW_ID'))->count();

                 /** My Tweets */
                 $response = Http::withToken($token)
                     ->get("https://api.twitter.com/2/users/" . $user->provider_id . "/tweets?tweet.fields=entities,public_metrics")
                     ->json('data');
                 $v3 = collect($response)
                     ->filter(function($item){
                        $v1 = isset($item['entities']['hashtags']) ?
                            collect($item['entities']['hashtags'])
                                ->map(function($j){
                                    return $j['tag'];
                                })
                            : collect([]);

                        $v2 = $v1->contains('depi_army');
                        return $v2;
                     });

                 $v4 = $v3->map(function($item){
                         return $item["public_metrics"];
                     });

                 $your_retweet_count = $v4->sum('retweet_count');
                 $your_reply_count = $v4->sum('reply_count');
                 $your_like_count = $v4->sum('like_count');

                 DB::table('stats')->updateOrInsert(
                     ['user_id' => $user->id],
                     [
                         'depi_retweet_count' => $depi_retweet_count,
                         'depi_reply_count' => $depi_reply_count,
                         'depi_like_count' => $depi_like_count,
                         'your_retweet_count' => $your_retweet_count,
                         'your_reply_count' => $your_reply_count,
                         'your_like_count' => $your_like_count,
                     ]
                 );
             }
             foreach($users as $user){
                 $stat = json_decode(json_encode(DB::table('stats')->where('user_id', $user->id)->first()), true);
                 if( $user->metrics()['rank'] == 'Lieutenant' && !$stat['lieutenant_at']){
                     DB::table('stats')
                         ->where('user_id', $user->id)
                         ->update([
                             'lieutenant_at' => now()
                         ]);
                 }else if( $user->metrics()['rank'] == 'Captain' && !$stat['captain_at']){
                     DB::table('stats')
                         ->where('user_id', $user->id)
                         ->update([
                             'captain_at' => now()
                         ]);
                 }else if( $user->metrics()['rank'] == 'Major' && !$stat['major_at']){
                     DB::table('stats')
                         ->where('user_id', $user->id)
                         ->update([
                             'major_at' => now()
                         ]);
                 }else if( $user->metrics()['rank'] == 'Colonel' && !$stat['colonel_at']){
                     DB::table('stats')
                         ->where('user_id', $user->id)
                         ->update([
                             'colonel_at' => now()
                         ]);
                 }else if( $user->metrics()['rank'] == 'General' && !$stat['general_at']){
                     DB::table('stats')
                         ->where('user_id', $user->id)
                         ->update([
                             'general_at' => now()
                         ]);
                 }
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
