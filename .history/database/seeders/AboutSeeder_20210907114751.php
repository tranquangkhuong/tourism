<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'about_us' => 'Giới thiệu về VieTour',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
            'instagram' => 'instagram.com',
            'twitter' => 'twitter.com',
            
        ])
    }
}
