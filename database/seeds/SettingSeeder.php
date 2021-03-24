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
            'nama'=>'parallax_pic',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'parallax_text',
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
