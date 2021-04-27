<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'nama'=>'about',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'about_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'blog',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'blog_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'gallery',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'gallery_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'quote',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'quote_bg',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'quote_author',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'instagram',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'facebook',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'alamat',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'phone',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'email',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'story',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'story_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'latitude',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'longitude',
            'value'=>''
        ]);
        


    }
}
