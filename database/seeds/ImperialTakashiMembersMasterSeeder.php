<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImperialTakashiMembersMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $members = [
            [
                'steamId64' => '76561198009393766',
                'twitterId' => '63148409',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198015122807',
                'twitterId' => '153415601',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561197999711251',
                'twitterId' => '76562029',
                'youtubeChannelId' => 'UCwUkTc0dFAQbGw9_zLRBryQ',
                'created_at' =>  $now,
                'updated_at' => $now
            ]
        ];
        DB::table('imperial_takashi_members_master')->insert($members);
        //
    }
}
