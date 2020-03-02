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
                'steamId64' => '76561197994736871', // masarity
                'twitterId' => '60210710',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198002567695', // prophunt
                'twitterId' => '80001807',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198036648887', // emura
                'twitterId' => '3097925024',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198000345446', // tinattyo
                'twitterId' => '3071360864',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561197998985189', // garsy
                'twitterId' => '404746959',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561197982521248', // ain
                'twitterId' => '111869369',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198023794341', // fkmt
                'twitterId' => '300821678',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198006643756', // boro
                'twitterId' => '83117831',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561197999711251', // saidah
                'twitterId' => '76562029',
                'youtubeChannelId' => 'UCwUkTc0dFAQbGw9_zLRBryQ',
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198006312486', // tempura
                'twitterId' => '73926048',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198009393766', // wanibuchi
                'twitterId' => '63148409',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198018263812', // niki
                'twitterId' => '199664648',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198004265707', // kashiwazaki
                'twitterId' => '69238685',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561197969906672', // yokushu
                'twitterId' => '14084538',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198016237078', // lemoncola
                'twitterId' => '904966357422284801',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561197992033839', // kurety
                'twitterId' => '67184670',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => '76561198015122807', // yasuda
                'twitterId' => '153415601',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => null, // yagami
                'twitterId' => '1029658856467574785',
                'youtubeChannelId' => 'UCRCKmnkNgfSJnYbzie4LZ0w',
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => null, // mei
                'twitterId' => '744048839145979904',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
            [
                'steamId64' => null, // crystal maiden
                'twitterId' => '2242535664',
                'youtubeChannelId' => null,
                'created_at' =>  $now,
                'updated_at' => $now
            ],
        ];
        DB::table('imperial_takashi_members_master')->insert($members);
        //
    }
}
