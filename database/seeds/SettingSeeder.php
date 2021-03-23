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
            'nama'=>'carousel',
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
            'nama'=>'Alamat',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'Telepon',
            'value'=>''
        ]);

        Setting::create([
            'nama'=>'Email',
            'value'=>''
        ]);


    }
}
